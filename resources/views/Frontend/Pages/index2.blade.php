@extends('Frontend.Layouts.master3')
@section('title')
    <title>{{$seo_setting->seo_title}}</title>
@endsection

@section('meta')
    <meta name="title" content="{{$seo_setting->seo_title}}">
    <meta name="description" content="{{$seo_setting->seo_description}}">
    <meta name="keywords" content="{{$seo_setting->seo_description}}">
@endsection

@section('content')
    <main>
        <!-- .banner-part-start -->
        <section class="banner-two" style="background: url({{asset('frontend/assets/images/banner/Hero_Image_New.jpg')}}) no-repeat
        center/cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner-two-taitel">
                            <h1>{{$slider->title}}</h1>
                        </div>
                        <div class="banner-taiteL-btn">

                            <a href="{{route('menu')}}" class="main-btn-four">
                                <span>
                                    <svg width="29" height="30" viewBox="0 0 29 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.6562 28.5938H6.34375C5.62269 28.5938 4.93117 28.3073 4.4213 27.7974C3.91144 27.2876 3.625 26.5961 3.625 25.875V4.125C3.625 3.40394 3.91144 2.71242 4.4213 2.20255C4.93117 1.69269 5.62269 1.40625 6.34375 1.40625H22.6562C23.3773 1.40625 24.0688 1.69269 24.5787 2.20255C25.0886 2.71242 25.375 3.40394 25.375 4.125V25.875C25.375 26.5961 25.0886 27.2876 24.5787 27.7974C24.0688 28.3073 23.3773 28.5938 22.6562 28.5938ZM6.34375 3.21875C6.1034 3.21875 5.87289 3.31423 5.70293 3.48418C5.53298 3.65414 5.4375 3.88465 5.4375 4.125V25.875C5.4375 26.1154 5.53298 26.3459 5.70293 26.5158C5.87289 26.6858 6.1034 26.7812 6.34375 26.7812H22.6562C22.8966 26.7812 23.1271 26.6858 23.2971 26.5158C23.467 26.3459 23.5625 26.1154 23.5625 25.875V4.125C23.5625 3.88465 23.467 3.65414 23.2971 3.48418C23.1271 3.31423 22.8966 3.21875 22.6562 3.21875H6.34375Z" />
                                        <path
                                            d="M19.4844 15.9062H9.51562C9.27527 15.9062 9.04476 15.8108 8.87481 15.6408C8.70485 15.4709 8.60938 15.2404 8.60938 15V13.1875C8.61081 11.7458 9.18415 10.3636 10.2036 9.3442C11.223 8.32478 12.6052 7.75144 14.0469 7.75H14.9531C16.3948 7.75144 17.777 8.32478 18.7964 9.3442C19.8158 10.3636 20.3892 11.7458 20.3906 13.1875V15C20.3906 15.2404 20.2951 15.4709 20.1252 15.6408C19.9552 15.8108 19.7247 15.9062 19.4844 15.9062ZM10.4219 14.0938H18.5781V13.1875C18.5781 12.2261 18.1962 11.3041 17.5164 10.6242C16.8366 9.94442 15.9145 9.5625 14.9531 9.5625H14.0469C13.0855 9.5625 12.1634 9.94442 11.4836 10.6242C10.8038 11.3041 10.4219 12.2261 10.4219 13.1875V14.0938Z" />
                                        <path
                                            d="M14.5 5.9375C14.9807 5.9375 15.4417 6.12846 15.7816 6.46837C16.1215 6.80828 16.3125 7.2693 16.3125 7.75V8.20312H12.6875V7.75C12.6875 7.2693 12.8785 6.80828 13.2184 6.46837C13.5583 6.12846 14.0193 5.9375 14.5 5.9375Z" />
                                        <path
                                            d="M20.8438 15.9062H8.15625C7.9159 15.9062 7.68539 15.8108 7.51543 15.6408C7.34548 15.4709 7.25 15.2404 7.25 15C7.25 14.7596 7.34548 14.5291 7.51543 14.3592C7.68539 14.1892 7.9159 14.0938 8.15625 14.0938H20.8438C21.0841 14.0938 21.3146 14.1892 21.4846 14.3592C21.6545 14.5291 21.75 14.7596 21.75 15C21.75 15.2404 21.6545 15.4709 21.4846 15.6408C21.3146 15.8108 21.0841 15.9062 20.8438 15.9062Z" />
                                        <path
                                            d="M19.0312 20.4375H9.96875C9.7284 20.4375 9.49789 20.342 9.32793 20.1721C9.15798 20.0021 9.0625 19.7716 9.0625 19.5312C9.0625 19.2909 9.15798 19.0604 9.32793 18.8904C9.49789 18.7205 9.7284 18.625 9.96875 18.625H19.0312C19.2716 18.625 19.5021 18.7205 19.6721 18.8904C19.842 19.0604 19.9375 19.2909 19.9375 19.5312C19.9375 19.7716 19.842 20.0021 19.6721 20.1721C19.5021 20.342 19.2716 20.4375 19.0312 20.4375Z" />
                                        <path
                                            d="M19.0312 24.0625H9.96875C9.7284 24.0625 9.49789 23.967 9.32793 23.7971C9.15798 23.6271 9.0625 23.3966 9.0625 23.1562C9.0625 22.9159 9.15798 22.6854 9.32793 22.5154C9.49789 22.3455 9.7284 22.25 9.96875 22.25H19.0312C19.2716 22.25 19.5021 22.3455 19.6721 22.5154C19.842 22.6854 19.9375 22.9159 19.9375 23.1562C19.9375 23.3966 19.842 23.6271 19.6721 23.7971C19.5021 23.967 19.2716 24.0625 19.0312 24.0625Z" />
                                    </svg>
                                </span>
                                {{ __('translate.Get your Menu') }}
                            </a>
                            <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                                href="{{$slider->url}}">

                                <div class="icon">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.0503 8.57255L20.1723 8.66203C20.6563 9.04385 21.052 9.52682 21.3312 10.0778C21.6329 10.6732 21.7901 11.3314 21.7901 11.9989C21.7901 12.6664 21.6329 13.3245 21.3312 13.9199C21.0295 14.5153 20.5918 15.0313 20.0535 15.4261L20.0533 15.4262L10.5135 22.4261C10.5134 22.4261 10.5134 22.4261 10.5134 22.4261C9.88011 22.8906 9.13054 23.1704 8.34786 23.2347C7.56515 23.299 6.77993 23.1451 6.07936 22.7902C5.37878 22.4353 4.79024 21.8932 4.37906 21.2241C3.96791 20.5551 3.75016 19.7852 3.75 18.9999C3.75 18.9998 3.75 18.9998 3.75 18.9997L3.75 5.00018C3.75 5.00013 3.75 5.00009 3.75 5.00004C3.75 4.99998 3.75 4.99992 3.75 4.99987C3.75039 4.21498 3.96811 3.44554 4.37905 2.77682C4.79004 2.10802 5.37823 1.56611 6.0784 1.21118C6.77857 0.856256 7.56336 0.702181 8.34575 0.766043C9.12808 0.829899 9.87744 1.10916 10.5108 1.57287C10.5108 1.57291 10.5109 1.57294 10.5109 1.57298L20.0503 8.57255ZM10.2137 22.0225L18.56 15.8984V15.9062L19.7539 15.0294C20.2283 14.681 20.614 14.2259 20.8799 13.7008C21.1457 13.1757 21.2843 12.5954 21.2843 12.0069C21.2843 11.4183 21.1457 10.838 20.8799 10.313C20.614 9.78787 20.2283 9.33274 19.7539 8.98436L19.7537 8.98418L10.2183 1.98761C10.2175 1.98701 10.2167 1.98641 10.2159 1.98581C9.57785 1.51085 8.80433 1.25291 8.00886 1.24987V1.24986L8.00518 1.24987C7.41422 1.25051 6.83172 1.39015 6.30473 1.65747C5.6827 1.96598 5.16007 2.44339 4.79668 3.03509C4.43324 3.62687 4.2438 4.30901 4.25 5.0034L4.25 18.9999L4.25 19.0009C4.25097 19.6929 4.44341 20.3712 4.80601 20.9606C5.1686 21.55 5.68722 22.0276 6.30446 22.3405C6.9217 22.6533 7.61347 22.7893 8.30322 22.7334C8.99296 22.6774 9.65377 22.4317 10.2125 22.0234L10.2137 22.0225Z"
                                                stroke-width="1.5" />
                                        </svg>
                                    </span>
                                </div>
                                {{ __('translate.Watch Video') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .banner-part-end -->

       <!-- .Categories-part-start -->
       <section class="categories row-categories-home  s-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6  ">
                        <div class="categories-head">
                            <h2>{{$section->category_titel}}</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="categories-main-box mt-48px customer-item-slick-row">
                        @foreach ($categories as $category)
                            <a class="categories-item  " data-aos="fade-up" href="{{route('menu', ['category' => $category->slug])}}">
                                 <div class="categories-icon">
                                       <img  src="{{ asset($category->image) }}" alt="{{ $category->name }}">
                                    </div>
                                    <div class="categories-item-text line-clamp-1">
                                        <h3>{{$category->name}}</h3>
                                    </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- .Categories-part-end -->



        <!-- Traditional part-start -->
    <section class="traditional food-details s-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="traditional-head">
                        <h2>{{$section->traditional_food_titel}}</h2>
                    </div>
                </div>
            </div>

            <!-- Grid Tab -->
            <div class="tab-pane fade show in active" id="grid" role="tabpanel">
                <!-- Filter Title -->
                <div class="row justify-content-center">
                    <div class=" col-xxl-8 col-xl-8 col-lg-12">
                        <ul class="shaf-filter course-filter  ">
                            <li class="active" data-group="all">{{ __('translate.All Categories') }}</li>
                            @php
                                $categoryLoop = $Allcategories->each(function($Allcategory) {
                                    echo "<li data-group='{$Allcategory->id}'>{$Allcategory->name}</li>";
                                });
                            @endphp
                        </ul>
                    </div>
                </div>
                <!-- Filter Title -->

                <!-- Filter Content -->
                <div class="row shafull-container">
                    @foreach ($product2 as $product2)
                        <div class=" col-xxl-3 col-xl-3 col-lg-4 col-md-6 shaf-item res-mb-20px "
                        data-groups='["all","{{ $product2->category_id }}" ]'>

                            <div class="featured-item  " data-aos="fade-up" data-aos-delay="100">
                                @if ($product2->is_populer == 1)
                                <div class="featured-item-img-populer">

                                </div>
                                @endif

                                <div class="featured-item-img">
                                    <img src="{{asset($product2['tumb_image'])}}" class="w-100" alt="featured-thumb">
                                    <div class="featured-item-img-overlay">
                                        <div class="featured-item-img-over-text">
                                            <div class="left-text">
                                                <a href="{{route('wishlist.add',$product2->id)}}">
                                                    <div class="icon">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                                    stroke="#F01543" stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            @php
                                            $discount = $product2->price - $product2->offer_price;
                                            $discountPercentage = ($discount / $product2->price) * 100;
                                            @endphp
                                            @if ($discountPercentage != 100.00)
                                                <div class="right-text">
                                                    <h5>{{ number_format($discountPercentage, 2) }}% {{ __('translate.Off') }} </h5>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="featured-item-text">
                                    <div class="text-item">
                                        <div class="left">
                                            <h3>{{$setting->currency_icon}}{{$product2->price}}</h3>
                                        </div>
                                        <div class="right">
                                        </div>
                                    </div>

                                    <div class="text-item-center">
                                        <h3><a class="line-clamp-1" title="{{$product2->name}}" href="{{route('menu-detils',$product2->slug)}}">{{$product2->name}}</a></h3>
                                    </div>

                                    <div class="text-item-center-item-box">
                                        @foreach(json_decode($product2->specifaction, true) as $name)
                                            <div class="text-item-center-item">
                                                <div class="icon">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="text">
                                                    <h5>{{$name}}</h5>
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="featured-item-btn">
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $product2['id'] }}" class="main-btn-three">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path
                                                            d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                {{ __('translate.Add to Cart') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="traditional-btn">
                            <a href="{{route('menu')}}" class="main-btn-four">{{ __('translate.See More') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Traditional part-end -->




    <!-- Process part-start -->

    <section class="process s-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 " data-aos="fade-right">
                    <div class="process-img-box">
                        <div class="process-img">
                            <img src="{{asset($crafting->image)}}" alt="thumb">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="process-head" data-aos="fade-up">
                        <h2>{{$crafting->title}}</h2>
                    </div>

                    <div class="process-item-box">
                        <div class="process-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="process-item-icon">
                                <div class="icon">
                                    <span>
                                        <svg width="30" height="34" viewBox="0 0 30 34" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M20.7371 23.5034C23.8364 20.3264 26.6663 15.5679 26.6663 11.7606C26.6663 5.44878 21.443 0.332031 14.9997 0.332031C8.55635 0.332031 3.33301 5.44878 3.33301 11.7606C3.33301 15.5679 6.16294 20.3264 9.26228 23.5034C11.3011 25.5932 13.4566 26.9987 14.9997 26.9987C16.5428 26.9987 18.6982 25.5932 20.7371 23.5034ZM14.9997 15.332C16.8406 15.332 18.333 13.8396 18.333 11.9987C18.333 10.1577 16.8406 8.66536 14.9997 8.66536C13.1587 8.66536 11.6663 10.1577 11.6663 11.9987C11.6663 13.8396 13.1587 15.332 14.9997 15.332Z"
                                                fill="white" />
                                            <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.75902 24.4883C2.6873 25.3824 0 26.9199 0 28.6668C0 31.4282 6.71573 33.6668 15 33.6668C23.2843 33.6668 30 31.4282 30 28.6668C30 26.9199 27.3127 25.3824 23.241 24.4883C23.0051 24.7502 22.7668 25.0045 22.5269 25.2504C21.4064 26.399 20.2024 27.4143 19.0016 28.1599C17.8569 28.8707 16.455 29.5 15 29.5C13.545 29.5 12.1431 28.8707 10.9984 28.1599C9.7976 27.4143 8.59362 26.399 7.47312 25.2504C7.23321 25.0045 6.99487 24.7502 6.75902 24.4883Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </div>


                            </div>

                            <div class="text">
                                <h3>{{$crafting->step_1}}</h3>
                                <p>{{$crafting->detils_1}}</p>
                            </div>

                            <div class="process-item-right-img">

                            </div>
                        </div>
                        <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="process-item-icon">
                                <div class="icon">
                                    <span>
                                        <svg width="34" height="30" viewBox="0 0 34 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M3.66634 10H0.333008V25L7.51773 28.5924C9.36914 29.5181 11.4106 30 13.4806 30H26.9997C28.8406 30 30.333 28.5076 30.333 26.6667C30.333 24.8257 28.8406 23.3333 26.9997 23.3333H24.3604C22.8079 23.3333 21.2768 22.9719 19.8882 22.2776L14.9863 19.8267C15.3068 19.5315 15.5716 19.1655 15.7544 18.739C16.4436 17.1307 15.7065 15.2676 14.1034 14.5662L3.66634 10Z"
                                                fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M20.666 0C19.5614 0 18.666 0.89543 18.666 2V13C18.666 14.1046 19.5614 15 20.666 15H31.666C32.7706 15 33.666 14.1046 33.666 13V2C33.666 0.895431 32.7706 0 31.666 0H20.666ZM27.8327 6.25C28.523 6.25 29.0827 5.69036 29.0827 5C29.0827 4.30964 28.523 3.75 27.8327 3.75H24.4993C23.809 3.75 23.2493 4.30964 23.2493 5C23.2493 5.69036 23.809 6.25 24.4993 6.25H27.8327Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </div>


                            </div>

                            <div class="text">
                                <h3>{{$crafting->step_2}}</h3>
                                <p>{{$crafting->detils_2}}</p>
                            </div>

                            <div class="process-item-right-img two">

                            </div>
                        </div>
                        <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="process-item-icon">
                                <div class="icon">
                                    <span>
                                        <svg width="24" height="34" viewBox="0 0 24 34" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M16.6667 0.332031H3.33333C1.49238 0.332031 0 1.82442 0 3.66537V30.332C0 32.173 1.49238 33.6654 3.33333 33.6654H16.6667C18.5076 33.6654 20 32.173 20 30.332V3.66536C20 1.82442 18.5076 0.332031 16.6667 0.332031Z"
                                                fill="white" />
                                            <path
                                                d="M10 8.66406H20C21.8409 8.66406 23.3333 10.1564 23.3333 11.9974V18.6641C23.3333 20.505 21.8409 21.9974 20 21.9974H10V8.66406Z"
                                                fill="white" />
                                            <path
                                                d="M11.6663 28.6667C11.6663 29.5871 10.9201 30.3333 9.99967 30.3333C9.0792 30.3333 8.33301 29.5871 8.33301 28.6667C8.33301 27.7462 9.0792 27 9.99967 27C10.9201 27 11.6663 27.7462 11.6663 28.6667Z"
                                                fill="white" />
                                            <path opacity="0.4"
                                                d="M9.99968 14.5L23.333 14.5L23.333 12L9.99968 12L9.99968 14.5Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </div>


                            </div>

                            <div class="text">
                                <h3>{{$crafting->step_3}}</h3>
                                <p>{{$crafting->detils_3}}</p>
                            </div>

                            <div class="process-item-right-img three">

                            </div>
                        </div>
                        <div class="process-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="process-item-icon">
                                <div class="icon">
                                    <span>
                                        <svg width="34" height="31" viewBox="0 0 34 31" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M13.6663 0H6.99967C3.31778 0 0.333008 2.98477 0.333008 6.66667V20C0.333008 23.1087 2.46079 25.7204 5.33942 26.4583C5.44698 24.7144 6.89538 23.3333 8.66634 23.3333C10.5073 23.3333 11.9997 24.8257 11.9997 26.6667H20.333V6.66667C20.333 2.98477 17.3482 0 13.6663 0Z"
                                                fill="white" />
                                            <path
                                                d="M20.333 26.668V6.66797H25.6815C26.5284 6.66797 27.3435 6.9903 27.9613 7.56951L32.6128 11.9303C33.285 12.5604 33.6663 13.4407 33.6663 14.3621V23.3346C33.6663 25.1756 32.174 26.668 30.333 26.668H20.333Z"
                                                fill="white" />
                                            <path
                                                d="M12.8333 26.6667C12.8333 28.9679 10.9679 30.8333 8.66667 30.8333C6.36548 30.8333 4.5 28.9679 4.5 26.6667C4.5 26.5792 4.5027 26.4923 4.50801 26.4062C4.64247 24.2263 6.45296 22.5 8.66667 22.5C10.9679 22.5 12.8333 24.3655 12.8333 26.6667Z"
                                                fill="white" />
                                            <path opacity="0.4"
                                                d="M31.1587 26.6667C31.1587 28.9679 29.2932 30.8333 26.992 30.8333C24.6908 30.8333 22.8253 28.9679 22.8253 26.6667C22.8253 26.5792 22.828 26.4923 22.8333 26.4062C22.9678 24.2263 24.7783 22.5 26.992 22.5C29.2932 22.5 31.1587 24.3655 31.1587 26.6667Z"
                                                fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.08301 8.33203C9.08301 7.64168 9.64265 7.08203 10.333 7.08203L13.6663 7.08203C14.3567 7.08203 14.9163 7.64168 14.9163 8.33203C14.9163 9.02239 14.3567 9.58203 13.6663 9.58203L10.333 9.58203C9.64265 9.58203 9.08301 9.02239 9.08301 8.33203Z"
                                                fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.75 15C5.75 14.3096 6.30964 13.75 7 13.75L13.6667 13.75C14.357 13.75 14.9167 14.3096 14.9167 15C14.9167 15.6904 14.357 16.25 13.6667 16.25H7C6.30964 16.25 5.75 15.6904 5.75 15Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </div>


                            </div>

                            <div class="text">
                                <h3>{{$crafting->step_4}}</h3>
                                <p>{{$crafting->detils_4}}</p>
                            </div>

                            <div class="process-item-right-img four">

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process part-end -->

    <!-- Popular part-start -->
    <section class="popular s-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="popular-head">
                        <h2>{{ __('translate.Most Popular Items') }}</h2>
                    </div>
                </div>
            </div>

            <div class="row gap-30 popular-item-box-mt">
                @foreach ($product3 as $product)
                    <div class="col-lg-4 res-popular-mt-30px" data-aos="fade-up">
                        <div class="popular-item-box row-card">
                            <div class="popular-item-box-img">
                                <img src="{{asset($product['tumb_image'])}}" alt="thumb">
                                <div class="popular-item-box-img-overlay">
                                </div>
                            </div>

                            <div class="popular-inner-box">
                                <div class="popular-item-box-text">
                                    <a href="{{route('menu-detils',$product->slug)}}">
                                    <h3 class="line-clamp-1">{{$product->name}}</h3>
                                    </a>
                                </div>
                                @foreach(json_decode($product->specifaction, true) as $name)

                                    <div class="popular-inner-item">
                                        <div class="icon">
                                            <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_304_21999)">
                                                        <path
                                                            d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                            stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                </svg></span>
                                        </div>

                                        <div class="text">
                                            <h5>{{$name}}</h5>
                                        </div>
                                    </div>
                                @endforeach


                                <div class="popular-inner-item-btm">
                                    <div class="text">
                                        <h3>{{$setting->currency_icon}}{{$product->price}}</h3>
                                    </div>

                                    <div class="popular-inner-item-btn">
                                        <a type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $product['id'] }}" class="main-btn-five">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path
                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                        stroke-width="1.5"></path>
                                                    <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            {{ __('translate.add') }}
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Popular part-end -->



{{--
    <!-- Promotions part-start -->
    <section class="promotions s-padding">
        <div class="container">
            <div class="row">
                <div class=" col-xxl-5 col-xl-7 col-lg-7">
                    <div class="promotions-head mb-48px">
                        <h2>{{$section->promotion_titel}}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($promotions as $promotion)
                    <div class="col-lg-6 col-md-6">
                        <div class="promotions-img">
                            <a href="{{$promotion['link']}}"> <img src="{{asset($promotion['image'])}}"
                                    class="w-100" alt="thumb"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Promotions part-end -->

    <!-- work part-start -->
    <section class="work s-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-head ">
                        <h2>{{$crafting->title}}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class=" col-xxl-3 col-xl-4 col-lg-6 col-md-6 res-mb-20px" data-aos="fade-right">
                    <div class="work-item">
                        <div class="work-item-icon">
                            <div class="icon">
                                <span>
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.4424 13.9028C14.302 11.9966 16 9.14151 16 6.85714C16 3.07005 12.866 0 9 0C5.13401 0 2 3.07005 2 6.85714C2 9.14151 3.69796 11.9966 5.55756 13.9028C6.78087 15.1567 8.07413 16 9 16C9.92587 16 11.2191 15.1567 12.4424 13.9028ZM9 9C10.1046 9 11 8.10457 11 7C11 5.89543 10.1046 5 9 5C7.89543 5 7 5.89543 7 7C7 8.10457 7.89543 9 9 9Z"
                                            fill="white" />
                                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.05541 14.4922C1.61238 15.0286 0 15.9512 0 16.9993C0 18.6561 4.02944 19.9993 9 19.9993C13.9706 19.9993 18 18.6561 18 16.9993C18 15.9512 16.3876 15.0286 13.9446 14.4922C13.8031 14.6493 13.6601 14.8019 13.5161 14.9495C12.8438 15.6386 12.1214 16.2478 11.4009 16.6952C10.7141 17.1216 9.87298 17.4992 9 17.4992C8.12701 17.4992 7.28586 17.1216 6.59907 16.6952C5.87856 16.2478 5.15617 15.6386 4.48387 14.9495C4.33993 14.8019 4.19692 14.6493 4.05541 14.4922Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </div>

                            <div class="text">
                                <h3>{{$crafting->step_1}}</h3>
                            </div>
                        </div>

                        <div class="work-item-text">
                            <p>{{$crafting->detils_1}}</p>
                        </div>

                        <div class="work-item-img">
                            <span>
                                <svg width="35" height="63" viewBox="0 0 35 63" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2"
                                        d="M18.96 19.1594L7.12 25.7994L0 12.8394L21.84 0.359375H34.72V62.9994H18.96V19.1594Z" />
                                </svg>
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6  res-mb-20px" data-aos="fade-right" data-aos-delay="100">
                    <div class="work-item">
                        <div class="work-item-icon">
                            <div class="icon">
                                <span>
                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M2 6H0V15L4.31083 17.1554C5.42168 17.7108 6.64658 18 7.88854 18H16C17.1046 18 18 17.1046 18 16C18 14.8954 17.1046 14 16 14H14.4164C13.4849 14 12.5663 13.7831 11.7331 13.3666L8.792 11.896C8.9843 11.7189 9.14317 11.4993 9.25282 11.2434C9.66638 10.2784 9.22409 9.16054 8.26225 8.73973L2 6Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 0C11.8954 0 11 0.89543 11 2V7C11 8.10457 11.8954 9 13 9H18C19.1046 9 20 8.10457 20 7V2C20 0.895431 19.1046 0 18 0H13ZM16.5 3.75C16.9142 3.75 17.25 3.41421 17.25 3C17.25 2.58579 16.9142 2.25 16.5 2.25L14.5 2.25C14.0858 2.25 13.75 2.58579 13.75 3C13.75 3.41421 14.0858 3.75 14.5 3.75L16.5 3.75Z" fill="white"/>
                                </svg>
                                </span>
                            </div>

                            <div class="text">
                                <h3>{{$crafting->step_2}}</h3>
                            </div>
                        </div>

                        <div class="work-item-text">
                            <p>{{$crafting->detils_2}}</p>
                        </div>

                        <div class="work-item-img">
                            <span>
                                <svg width="48" height="64" viewBox="0 0 48 64" fill="none" opacity="0.2"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 64.0003V50.7203L22.08 33.1203C25.84 30.1603 28.32 27.8403 29.68 26.2403C31.04 24.6403 31.76 22.8803 31.76 21.0403C31.76 17.5203 29.12 14.3203 24.24 14.3203C19.52 14.3203 16.24 16.7203 14.4 21.5203L0.64 15.6803C2.16 10.6403 5.04 6.80031 9.36 4.24031C13.76 1.60032 18.64 0.320312 24.16 0.320312C31.28 0.320312 36.96 2.24032 41.12 6.16031C45.28 10.0003 47.36 14.8003 47.36 20.6403C47.36 24.4003 46.24 27.8403 44.08 30.8003C41.92 33.7603 38.32 37.1203 33.2 41.0403L20.56 50.7203H47.68V64.0003H0Z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6  res-mb-20px" data-aos="fade-right" data-aos-delay="200">
                    <div class="work-item">
                        <div class="work-item-icon">
                            <div class="icon">
                                <span>
                                    <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M10 0H2C0.895431 0 0 0.895431 0 2V18C0 19.1046 0.895431 20 2 20H10C11.1046 20 12 19.1046 12 18V2C12 0.895431 11.1046 0 10 0Z"
                                            fill="white" />
                                        <path
                                            d="M6 5H12C13.1046 5 14 5.89543 14 7V11C14 12.1046 13.1046 13 12 13H6V5Z"
                                            fill="white" />
                                        <path
                                            d="M7 17C7 17.5523 6.55228 18 6 18C5.44772 18 5 17.5523 5 17C5 16.4477 5.44772 16 6 16C6.55228 16 7 16.4477 7 17Z"
                                            fill="white" />
                                        <path opacity="0.4" d="M6 8.5L14 8.5L14 7L6 7L6 8.5Z" fill="white" />
                                    </svg>
                                </span>
                            </div>

                            <div class="text">
                                <h3>{{$crafting->step_3}}</h3>
                            </div>
                        </div>

                        <div class="work-item-text">
                            <p>{{$crafting->detils_3}}</p>
                        </div>

                        <div class="work-item-img">
                            <span>
                                <svg width="48" height="65" viewBox="0 0 48 65" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2"
                                        d="M23.76 64.9603C12.48 64.9603 3.52 60.1603 0 50.8003L12.96 44.2403C15.12 48.9603 18.72 51.2803 23.6 51.2803C28.8 51.2803 31.92 48.8003 31.92 45.2803C31.92 41.3603 28.96 39.0403 23.6 39.0403H17.92V25.7603H23.2C27.92 25.7603 30.8 23.5203 30.8 19.7603C30.8 16.4803 28 13.9203 23.2 13.9203C18.96 13.9203 15.92 16.1603 13.92 20.5603L0.8 14.2403C2.48 9.68032 5.36 6.24031 9.6 3.92031C13.84 1.52032 18.48 0.320312 23.68 0.320312C30 0.320312 35.36 1.92032 39.68 5.04031C44 8.16032 46.16 12.5603 46.16 18.0803C46.16 24.4003 43.2 28.8803 37.28 31.5203C44.08 34.3203 47.44 39.1203 47.44 45.9203C47.44 51.6803 45.2 56.3203 40.72 59.7603C36.24 63.2003 30.56 64.9603 23.76 64.9603Z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 " data-aos="fade-right" data-aos-delay="300">
                    <div class="work-item">
                        <div class="work-item-icon">
                            <div class="icon">
                                <span>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M8 0H4C1.79086 0 0 1.79086 0 4V12C0 13.8652 1.27667 15.4323 3.00384 15.875C3.06838 14.8286 3.93742 14 5 14C6.10457 14 7 14.8954 7 16H12V4C12 1.79086 10.2091 0 8 0Z"
                                            fill="white" />
                                        <path
                                            d="M12 16V4H15.2091C15.7172 4 16.2063 4.1934 16.577 4.54093L19.3679 7.15739C19.7712 7.53548 20 8.06365 20 8.61646V14C20 15.1046 19.1046 16 18 16H12Z"
                                            fill="white" />
                                        <path
                                            d="M7.5 16C7.5 17.3807 6.38071 18.5 5 18.5C3.61929 18.5 2.5 17.3807 2.5 16C2.5 15.9475 2.50162 15.8954 2.50481 15.8437C2.58548 14.5358 3.67178 13.5 5 13.5C6.38071 13.5 7.5 14.6193 7.5 16Z"
                                            fill="white" />
                                        <path opacity="0.4"
                                            d="M18.4952 16C18.4952 17.3807 17.3759 18.5 15.9952 18.5C14.6145 18.5 13.4952 17.3807 13.4952 16C13.4952 15.9475 13.4968 15.8954 13.5 15.8437C13.5807 14.5358 14.667 13.5 15.9952 13.5C17.3759 13.5 18.4952 14.6193 18.4952 16Z"
                                            fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.25 5C5.25 4.58579 5.58579 4.25 6 4.25L8 4.25C8.41421 4.25 8.75 4.58579 8.75 5C8.75 5.41421 8.41421 5.75 8 5.75L6 5.75C5.58579 5.75 5.25 5.41421 5.25 5Z"
                                            fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.25 9C3.25 8.58579 3.58579 8.25 4 8.25L8 8.25C8.41421 8.25 8.75 8.58579 8.75 9C8.75 9.41421 8.41421 9.75 8 9.75L4 9.75C3.58579 9.75 3.25 9.41421 3.25 9Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </div>

                            <div class="text">
                                <h3>{{$crafting->step_4}}</h3>
                            </div>
                        </div>

                        <div class="work-item-text">
                            <p>{{$crafting->detils_4}}</p>
                        </div>

                        <div class="work-item-img">
                            <span>
                                <svg width="56" height="63" viewBox="0 0 56 63" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2"
                                        d="M30.4 51.3194H0V36.7594L27.68 0.359375H46V38.0394H55.36V51.3194H46V62.9994H30.4V51.3194ZM30.4 17.4794L14.72 38.0394H30.4V17.4794Z" />
                                </svg>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work part-end -->  --}}


    <!-- faq part-star -->
    <section class="faq s-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12" data-aos="fade-left">
                    <div class="faq-head">
                        <h2>{{$faqAbout->titel}}</h2>
                    </div>

                    <div class="faq-main">
                        <div class="accordion" id="accordionExample">
                            @foreach ($faqs as $index => $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $index + 1 }}">
                                        <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $index + 1}}"
                                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index + 1 }}">
                                            {{ $item->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $index + 1 }}" class="accordion-collapse {{ $index === 0 ? 'show' : 'collapse' }}"
                                        aria-labelledby="heading{{ $index + 1 }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {!! clean($item->answer) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="faq-img  ">
                                <img src="{{asset($faqAbout->image1)}}" class="w-100" alt="thumb">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="faq-img">
                                <div class="faq-img-two">
                                    <img src="{{asset($faqAbout->image3)}}" alt="thumb">
                                    <div class="faq-img-overlay">
                                        <div class="faq-img-overlay-text">
                                            <h2>
                                                <span>
                                                    <svg width="24" height="32" viewBox="0 0 24 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 26.1844C10.3275 26.1844 8.9625 27.4919 8.9625 29.0922C8.9625 30.6926 10.3275 32 12 32C13.6725 32 15.0375 30.6926 15.0375 29.0922C15.0375 27.499 13.6725 26.1844 12 26.1844ZM3.0375 0C1.365 0 0 1.30743 0 2.90779C0 4.50815 1.365 5.81558 3.0375 5.81558C4.71 5.81558 6.075 4.50815 6.075 2.90779C6.075 1.30743 4.71 0 3.0375 0ZM3.0375 8.73052C1.365 8.73052 0 10.038 0 11.6383C0 13.2387 1.365 14.5461 3.0375 14.5461C4.71 14.5461 6.075 13.2387 6.075 11.6383C6.075 10.038 4.71 8.73052 3.0375 8.73052ZM3.0375 17.461C1.365 17.461 0 18.7685 0 20.3688C0 21.9692 1.365 23.2766 3.0375 23.2766C4.71 23.2766 6.075 21.9692 6.075 20.3688C6.075 18.7685 4.71 17.461 3.0375 17.461ZM20.9625 5.82273C22.635 5.82273 24 4.51529 24 2.91494C24 1.31458 22.635 0 20.9625 0C19.29 0 17.925 1.30743 17.925 2.90779C17.925 4.50815 19.29 5.82273 20.9625 5.82273ZM12 17.461C10.3275 17.461 8.9625 18.7685 8.9625 20.3688C8.9625 21.9692 10.3275 23.2766 12 23.2766C13.6725 23.2766 15.0375 21.9692 15.0375 20.3688C15.0375 18.7685 13.6725 17.461 12 17.461ZM20.9625 17.461C19.29 17.461 17.925 18.7685 17.925 20.3688C17.925 21.9692 19.29 23.2766 20.9625 23.2766C22.635 23.2766 24 21.9692 24 20.3688C24 18.7685 22.635 17.461 20.9625 17.461ZM20.9625 8.73052C19.29 8.73052 17.925 10.038 17.925 11.6383C17.925 13.2387 19.29 14.5461 20.9625 14.5461C22.635 14.5461 24 13.2387 24 11.6383C24 10.038 22.635 8.73052 20.9625 8.73052ZM12 8.73052C10.3275 8.73052 8.9625 10.038 8.9625 11.6383C8.9625 13.2387 10.3275 14.5461 12 14.5461C13.6725 14.5461 15.0375 13.2387 15.0375 11.6383C15.0375 10.038 13.6725 8.73052 12 8.73052ZM12 0C10.3275 0 8.9625 1.30743 8.9625 2.90779C8.9625 4.50815 10.3275 5.81558 12 5.81558C13.6725 5.81558 15.0375 4.50815 15.0375 2.90779C15.0375 1.30743 13.6725 0 12 0Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                                {{$faqAbout->first_description}}
                                            </h2>

                                            <h4>{{ __('translate.Success') }}
                                                    <br> {{ __('translate.Event') }}
                                                </h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="faq-img img-mt">
                                <div class="faq-img-two">
                                    <img src="{{asset($faqAbout->image4)}}" alt="thumb">
                                    <div class="faq-img-overlay faq-img-overlay-two ">
                                        <div class="faq-img-overlay-text">
                                            <h2>
                                                <span>
                                                    <svg width="24" height="32" viewBox="0 0 24 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 26.1844C10.3275 26.1844 8.9625 27.4919 8.9625 29.0922C8.9625 30.6926 10.3275 32 12 32C13.6725 32 15.0375 30.6926 15.0375 29.0922C15.0375 27.499 13.6725 26.1844 12 26.1844ZM3.0375 0C1.365 0 0 1.30743 0 2.90779C0 4.50815 1.365 5.81558 3.0375 5.81558C4.71 5.81558 6.075 4.50815 6.075 2.90779C6.075 1.30743 4.71 0 3.0375 0ZM3.0375 8.73052C1.365 8.73052 0 10.038 0 11.6383C0 13.2387 1.365 14.5461 3.0375 14.5461C4.71 14.5461 6.075 13.2387 6.075 11.6383C6.075 10.038 4.71 8.73052 3.0375 8.73052ZM3.0375 17.461C1.365 17.461 0 18.7685 0 20.3688C0 21.9692 1.365 23.2766 3.0375 23.2766C4.71 23.2766 6.075 21.9692 6.075 20.3688C6.075 18.7685 4.71 17.461 3.0375 17.461ZM20.9625 5.82273C22.635 5.82273 24 4.51529 24 2.91494C24 1.31458 22.635 0 20.9625 0C19.29 0 17.925 1.30743 17.925 2.90779C17.925 4.50815 19.29 5.82273 20.9625 5.82273ZM12 17.461C10.3275 17.461 8.9625 18.7685 8.9625 20.3688C8.9625 21.9692 10.3275 23.2766 12 23.2766C13.6725 23.2766 15.0375 21.9692 15.0375 20.3688C15.0375 18.7685 13.6725 17.461 12 17.461ZM20.9625 17.461C19.29 17.461 17.925 18.7685 17.925 20.3688C17.925 21.9692 19.29 23.2766 20.9625 23.2766C22.635 23.2766 24 21.9692 24 20.3688C24 18.7685 22.635 17.461 20.9625 17.461ZM20.9625 8.73052C19.29 8.73052 17.925 10.038 17.925 11.6383C17.925 13.2387 19.29 14.5461 20.9625 14.5461C22.635 14.5461 24 13.2387 24 11.6383C24 10.038 22.635 8.73052 20.9625 8.73052ZM12 8.73052C10.3275 8.73052 8.9625 10.038 8.9625 11.6383C8.9625 13.2387 10.3275 14.5461 12 14.5461C13.6725 14.5461 15.0375 13.2387 15.0375 11.6383C15.0375 10.038 13.6725 8.73052 12 8.73052ZM12 0C10.3275 0 8.9625 1.30743 8.9625 2.90779C8.9625 4.50815 10.3275 5.81558 12 5.81558C13.6725 5.81558 15.0375 4.50815 15.0375 2.90779C15.0375 1.30743 13.6725 0 12 0Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                                {{$faqAbout->secend_description}}
                                            </h2>

                                            <h4>{{ __('translate.Success') }}
                                                <br> {{ __('translate.Event') }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="faq-img  ">

                                <div class="img-animetion">
                                    <img src="{{asset($faqAbout->image2)}}" alt="thumb">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq part-end -->

    <!-- Customer part-start -->
    <section class="customer s-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="customer-head mb-48px">
                        <h2>{{$section->testonimal_titel}}</h2>
                    </div>
                </div>
            </div>

            <div class="row customer-item-slick-testonimal">
                @foreach ($testimonials as $testimonial)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="customer-item">
                            <div class="customer-img">

                            </div>
                            <div class="customer-item-text">
                                <p>{!! clean($testimonial->comment) !!}</p>
                            </div>
                        </div>

                        <div class="customer-inner">
                            <div class="customer-inner-img">
                                <img src="{{asset($testimonial->image)}}" alt="img">
                            </div>

                            <div class="customer-inner-text">
                                <div class="icon">

                                </div>

                                <h3>{{$testimonial->name}}</h3>
                                <h5>{{$testimonial->designation}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Customer part-end -->

    <!-- Our Latest news part-start -->
    <section class="our-latest-news s-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="news-taitel">
                        <h2>{{$section->news_titel}}</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="news-taitel-btn">
                        <a href="{{route('blog')}}" class="main-btn-four">{{ __('translate.See More') }}</a>
                    </div>
                </div>
            </div>

            <div class="row news-slick ">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 pd-15px">
                        <div class="news-item">
                            <div class="news-img">
                                <img src="{{asset($blog['image'])}}" class="w-100" alt="img">

                                <div class="news-img-overlay">
                                    <div class="news-img-overlay-text">
                                        <h3><a href="{{route('blog-detils',$blog->slug)}}">{{$blog->title}}</a></h3>
                                    </div>

                                    <div class="news-img-overlay-btn">
                                        <a href="{{route('blog-detils',$blog->slug)}}">{{ __('translate.Read More') }} <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Our Latest news part-end -->
    <!-- App part-start -->
    @if($setting->app_visibility == 1)
        <section class="restaurant">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="restaurant-taitel">
                            <h2>{{ $app->titel }}</h2>

                            <h4>{!! clean($app->description) !!}</h4>
                        </div>

                        <div class="restaurant-taitel-btn">
                            <a href="{{ $app->play_store }}" class="paly-bg" > <span>

                                </span> {{ __('translate.Play Store') }}</a>
                            <a href="{{ $app->i_store }}" class=" restaurant-taitel-btn-two"> <span>

                                </span> {{ __('translate.App Store') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="restaurant-img-main">
                            <div class="restaurant-img">
                                    <img src="{{asset($app->image)}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- App part-end -->
    </main>
@endsection
