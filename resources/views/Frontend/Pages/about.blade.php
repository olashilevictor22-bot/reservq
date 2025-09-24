@extends('Frontend.Layouts.master')

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

    <!-- banner  -->

    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>{{ __('translate.About Us') }}</h1>
                    </div>

                    <div class="inner-banner-item">
                        <div class="left">
                            <a href="{{route('index')}}">{{ __('translate.Home') }}</a>
                        </div>
                        <div class="icon">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 7L14 12L10 17" stroke="#E5E6EB" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                        <div class="left">
                            <span>{{ __('translate.About Us') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner  -->


    <!-- about part start  -->

    <section class="about-us s-padding">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-6 ">
                    <div class="about-us-img">
                        <img src="{{asset($about_us->banner_image)}}" class="w-100" alt="thumb">

                        <div class="about-us-img-btn-img">

                            <div class="about-us-img-btn-img-main">
                                <div class="about-us-img-btn-img-main-animetion-img">

                                </div>
                                <div class="about-us-img-btn-img-overlay">
                                    <h2>{{$about_us->title}}</h2>
                                    <span>{{ __('translate.YEARS') }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 about-pl-45px" data-aos="fade-left">
                    <div class="about-us-head">
                        <h2>{{$about_us->main_title}}</h2>

                        {!! clean($about_us->description) !!}
                    </div>

                    <div class="row about-mt-48px">
                        <div class="col-lg-6 col-md-6">
                            <div class="about-us-item">
                                <div class="icon">
                                </div>

                                <div class="text">
                                    <h3>{{$about_us->customer}}</h3>

                                    <p>{{$about_us->text_1}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about-us-item about-us-item-resmt ">
                                <div class="icon">

                                </div>

                                <div class="text">
                                    <h3>{{$about_us->branch}}</h3>

                                    <p>{{$about_us->text_2}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- about part end  -->


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
                @foreach ($product as $product)
                    <div class=" col-xxl-4 col-xl-6 col-lg-6 res-popular-mt-30px" data-aos="fade-up">
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

                <div class="row">
                    @foreach ($testimonials as $testimonial)
                        <div class=" col-xxl-4 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up">

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
