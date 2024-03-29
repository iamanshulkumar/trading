<!DOCTYPE html>
<html>
<head>
    @include('frontend.layouts.head')
</head>
<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">

        <div class="app-container app-theme-white fixed-sidebar fixed-header body-tabs-line">
            @include('frontend.layouts.topbar')
            
            <div class="app-main">
                @include('frontend.layouts.sidebar')
                <div class="app-main__outer" style="min-height: 100vh">
                    <div class="app-main__inner">
                        @yield('content')
                    </div>
                </div>
            </div>
            
            
            
            <div class="app-wrapper-footer">
                @include('frontend.layouts.footer')
                
            </div>
        </div>
    </div>
        
</body>
</html>
