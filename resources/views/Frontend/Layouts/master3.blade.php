@php
    $google_analytics = App\Models\GoogleAnalytic::first();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
    @yield('meta')
    <!-- Fav Icon -->
		<link rel="icon" href="{{asset($setting->favicon)}}">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/aos.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{asset('cdn/toastr.min.css')}}"/>

    <script src="{{asset('cdn/jquery-3.7.1.min.js') }}"></script>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>

     @if($google_analytics->status == 1)
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $google_analytics->analytic_id }}"></script>

        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ $google_analytics->analytic_id }}');
        </script>

    @endif
</head>

<body>
    <!-- header part start  -->
        @include('Frontend.Layouts.Partials.header3')
    <!-- header part End  -->
    <!-- Main Content part start  -->
        @yield('content')
    <!-- header part End  -->
    <!-- Main Content start  -->
        @include('Frontend.Layouts.Partials.footer')

        <nav class="mobile-bottom-menu-main" >
            <ul class="mobile-bottom-menu" >
                <!-- <li>
                    <a href="{{ route('index') }}" class="{{ Route::is('index') ? 'active' : '' }}" >
                        <i class="fa-solid fa-house"></i>
                    {{ __('translate.Home') }}
                    </a>
                </li > -->
                <li>
                    <a href="{{route('menu')}}" class="{{ Route::is('menu') ? 'active' : '' }}">
                    <i class="fa-solid fa-layer-group"></i>
                    {{ __('translate.Menu') }}
                    </a>
                </li>

                <li>
                    <a href="{{route('cartlist')}}" class="{{ Route::is('cartlist') ? 'active' : '' }}">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div class="tag-count">
                       <span> {{ session('cart') ? count(session('cart')) : 0 }}</span>
                    </div>
                    {{ __('translate.cart') }}
                </a>
                </li>

                @php
                    if (auth()->check()) {
                        $user_id = auth()->user()->id;
                        $totalWishlistItems = App\Models\Wishlist::where('user_id', $user_id)->count();
                    } else {
                        $totalWishlistItems = 0;
                    }
                @endphp

                <li>
                    <a href="{{route('user.wishlist')}}" class="{{ Route::is('user.wishlist') ? 'active' : '' }}">
                    <i class="fa-solid fa-heart"></i>
                    <div class="tag-count w-tag-count">
                       <span> {{ $totalWishlistItems }}</span>
                    </div>
                    {{ __('translate.Wishlist') }}
                </a>
                </li>
                <li>
                    <a href="{{route('user.dashboard')}}" class="{{ Route::is('user.dashboard') ? 'active' : '' }}">
                    <i class="fa-solid fa-circle-user"></i>
                    {{ __('translate.account') }}
                </a>
                </li>
            </ul>
        </nav>

<script src="{{asset('frontend/assets/js/venobox.min.js') }}"></script>
<script src="{{asset('frontend/assets/js/aos.js') }}"></script>
<script src="{{asset('frontend/assets/js/slick.min.js') }}"></script>
<script src="{{asset('frontend/assets/js//jquery.shuffle.min.js') }}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('frontend/assets/js/custom.js') }}"></script>
<script src="{{asset('cdn/toster.main.js')}}"></script>

 <style>
     .btn-success {
         color: #fff;
         margin-left: 20px;
         background-color: #198754;
         border-color: #198754;
     }
 </style>

 @if(Session::has('message'))
         <script>
             toastr.options = {
                 "progressBar" : true,
                 "closeButton" : true,
                 }
                 var type="{{Session::get('alert-type','info')}}"
                 switch(type){
                     case 'info':
                         toastr.info("{{ Session::get('message') }}");
                         break;
                     case 'success':
                         toastr.success("{{ Session::get('message') }}");
                         break;
                     case 'warning':
                         toastr.warning("{{ Session::get('message') }}");
                         break;
                     case 'error':
                         toastr.error("{{ Session::get('message') }}");
                         break;
                 }
     </script>
 @endif

 @if($errors->any())
     @foreach($errors->all() as $error)
         <script>
             toastr.error("{{ $error }}");
         </script>
     @endforeach
 @endif

</body>

</html>
