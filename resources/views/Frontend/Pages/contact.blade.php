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
                        <h1>{{ __('translate.Contact Us') }}</h1>
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
                            <span>{{ __('translate.Contact Us') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner  -->


    <!-- contact part start  -->

    <section class="contact-us s-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="contact-us-head">
                        <h2>{{$contactus->title}}</h2>
                    </div>

                    <div class="contact-us-item">
                        <div class="contact-us-inner">
                            <div class="icon">
                                <span>
                                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M63.4375 4.84375H44.6875C35.642 4.84375 28.2812 12.2045 28.2812 21.25C28.2812 29.5012 34.4039 36.3494 42.3438 37.4892V44.6875C42.3438 45.635 42.9136 46.4911 43.7903 46.8527C44.6548 47.2134 45.6689 47.02 46.3447 46.3445L55.033 37.6562H63.4375C72.483 37.6562 80 30.2955 80 21.25C80 12.2045 72.483 4.84375 63.4375 4.84375ZM44.6875 23.5934C43.3928 23.5934 42.3438 22.5441 42.3438 21.2497C42.3438 19.9553 43.3928 18.9059 44.6875 18.9059C45.9819 18.9059 47.0312 19.9553 47.0312 21.2497C47.0312 22.5441 45.9819 23.5934 44.6875 23.5934ZM54.0625 23.5934C52.7678 23.5934 51.7188 22.5441 51.7188 21.2497C51.7188 19.9553 52.7678 18.9059 54.0625 18.9059C55.3569 18.9059 56.4062 19.9553 56.4062 21.2497C56.4062 22.5441 55.3569 23.5934 54.0625 23.5934ZM63.4375 23.5934C62.1428 23.5934 61.0938 22.5441 61.0938 21.2497C61.0938 19.9553 62.1428 18.9059 63.4375 18.9059C64.7319 18.9059 65.7812 19.9553 65.7812 21.2497C65.7812 22.5441 64.7319 23.5934 63.4375 23.5934Z"
                                            fill="#FE724C" />
                                        <path
                                            d="M52.6562 75.1562C56.5334 75.1562 59.6875 72.0022 59.6875 68.125V58.75C59.6875 57.7406 59.042 56.8456 58.0853 56.5275L44.0558 51.84C43.3691 51.6089 42.6184 51.7141 42.0142 52.1123L36.0495 56.088C29.7323 53.0759 22.2366 45.58 19.2244 39.2628L23.2 33.2981C23.6005 32.6961 23.7013 31.9431 23.4723 31.2566L18.7848 17.227C18.4669 16.2705 17.5719 15.625 16.5625 15.625H7.03125C3.15406 15.625 0 18.7461 0 22.6233C0 49.6267 25.6528 75.1562 52.6562 75.1562Z"
                                            fill="#F01543" />
                                    </svg>
                                </span>
                            </div>

                            <div class="text">
                                <h5>{{$contactus->heading}}</h5>
                                <a href="tel:{{$contactus->phone}}"><p>{{$contactus->phone}}</p></a>
                                <a href="tel:{{$contactus->phone2}}"><p>{{$contactus->phone2}}</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-us-item">
                        <div class="contact-us-inner">
                            <div class="icon">
                                <span>
                                    <svg width="82" height="66" viewBox="0 0 82 66" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M59.6871 14.9219H5C2.23858 14.9219 0 17.1605 0 19.9219V66.0003L14.9218 58.5394H59.6871V14.9219Z"
                                            fill="#FE724C" />
                                        <path
                                            d="M25.6562 0H81.4912V53.3741L64.8477 43.9224H20.6562V5C20.6562 2.23858 22.8948 0 25.6562 0Z"
                                            fill="#F01543" />
                                        <rect opacity="0.7" x="5.73438" y="0.574219" width="8.50744"
                                            height="8.03481" fill="#FF7236" />
                                    </svg>
                                </span>
                            </div>

                            <div class="text text-two ">
                                <h5>{{$contactus->heading2}}</h5>
                                <a href="mailto:{{$contactus->email}}">
                                    <p>{{$contactus->email}}<br>
                                        {{$contactus->email2}} </p>
                                </a>


                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-7 col-md-6">
                    <div class="contact-us-from">
                        <form action="{{route('contact.message')}}" method="POST">
                            @csrf
                            <div class="from">
                                <div class="from-item from-item-two">
                                    <div class="from-inner">
                                        <label class="form-label">{{ __('translate.Name') }}*</label>
                                        <input placeholder="{{ __('translate.Name') }}" type="text" class="form-control" name="name" value="{{old('name')}}"  id="exampleFormControlInput2">
                                    </div>

                                </div>
                                <div class="from-item from-item-two ">
                                    <div class="from-inner">
                                        <label class="form-label">{{ __('translate.Email') }}*</label>
                                        <input type="email" class="form-control" name="email" value="{{old('email')}}"  id="exampleFormControlInput4" placeholder="{{ __('translate.Email') }}">
                                    </div>
                                    <div class="from-inner">
                                        <label class="form-label">{{ __('translate.Phone') }}*</label>
                                        <input type="text" class="form-control" name="phone" value="{{old('phone')}}"  id="exampleFormControlInput5" placeholder="{{ __('translate.Phone') }}">
                                    </div>
                                </div>
                                <div class="from-item from-item-two">
                                    <div class="from-inner">
                                        <label class="form-label">{{ __('translate.Subject') }}*</label>
                                        <input type="text" class="form-control" name="subject" value="{{old('subject')}}"  id="exampleFormControlInput2" placeholder="{{ __('translate.Subject') }}">
                                    </div>

                                </div>
                                <div class="from-item from-item-two pb-4">
                                    <div class="from-inner">
                                        <label for="exampleFormControlTextarea1" class="form-label">{{ __('translate.Message') }}*</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                         name="message" placeholder="{{ __('translate.Message') }}">{{old('message')}}</textarea>
                                    </div>

                                </div>

                                @if($googleRecaptcha->status==1)
                                        <div class="form-group homec-form-input">
                                            <div class="g-recaptcha" data-sitekey="{{ $googleRecaptcha->site_key }}"></div>
                                        </div>
                                @endif

                                <div class="from-btn">
                                    <button class="main-btn-four" type="submit">{{ __('translate.Send Message') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- contact part end  -->





    <!-- map part start  -->

    <div class="map-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <iframe
                            src="{{$contactus->google_map}}"
                            width="1320" height="560"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- map part end  -->

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
</main>
@endsection
