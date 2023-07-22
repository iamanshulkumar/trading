<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> @yield('title') | {{ config('app.name') }} </title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
<meta name="author" content="ADD AUTHOR INFORMATION">
<meta name="robots" content="index, follow">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicons -->
<link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}">


{{-- <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('/assets/css/custom_css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/custom_css/style_rtl.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/custom_css/vendor.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/custom_css/skin_color.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/custom_css/color_theme.css') }}">

<!-- Override CSS file - add your own CSS rules -->
{{-- <link rel="stylesheet" href="{{ asset('/assets/css/custom_admin_style.css') }}"> --}}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">




<!-- Override CSS file - add your own CSS rules -->
