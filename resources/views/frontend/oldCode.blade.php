<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use View;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    

    public function index()
    {
        $accessKey = 'a726603e54efab53c940dd64509e5916';
        $symbol = 'RELIANCE.XNSE';

        $apiEndpoint = 'http://api.marketstack.com/v1/eod';
        $queryParams = [
            'access_key' => $accessKey,
            'symbols' => $symbol,
        ];

        try {
            $response = Http::get($apiEndpoint, $queryParams);

            $apiResult = $response->json();

            $apiData = [];
            if (isset($apiResult['data'])) {
                $apiData = $apiResult['data'];
            }
        } catch (\Exception $e) {
            // Log the exception
            \Log::error($e->getMessage());

            // Set error message
            $errorMessage = 'Failed to retrieve stock market data. Please try again later.';

            return view('frontend.index', ['errorMessage' => $errorMessage]);
        }

        return view('frontend.index', ['apiData' => $apiData]);
    }


    public function nifty50()
{
    $apiEndpoint = 'https://api.marketstack.com/v1/eod/symbols/NSE:NIFTY50/option_chains';
    $accessKey = 'a726603e54efab53c940dd64509e5916';

    try {
        // Initialize cURL session
        $curl = curl_init();

        // Set cURL options
        curl_setopt($curl, CURLOPT_URL, $apiEndpoint . '?access_key=' . $accessKey); // Set the URL with access key
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Return the response instead of printing it

        // Execute the cURL request
        $apiResult = curl_exec($curl);

        // Check if the request was successful
        if ($apiResult === false) {
            throw new \Exception('cURL request failed: ' . curl_error($curl));
        }

        // Close the cURL session
        curl_close($curl);

        // Process the API result
        $optionChainData = json_decode($apiResult, true);

        // Pass the option chain data to the view
        return view('frontend.nifty50', ['apiResult' => $optionChainData]);
    } catch (\Exception $e) {
        // Log the exception
        error_log($e->getMessage());

        // Handle the exception if the API request fails
        return view('frontend.nifty50', ['apiResult' => null]);
    }
}


    // News Details
    public function viewNews(Blog $blog)
    {
        return view('frontend.newsDetails', compact('blog'));
    }
}