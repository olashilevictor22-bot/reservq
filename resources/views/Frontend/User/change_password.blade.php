@extends('Frontend.Layouts.master')
@section('title')
    <title>{{ __('translate.Change Password') }}</title>
@endsection

@section('content')
<main>

    <!-- banner  -->
    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1> {{ __('translate.Change Password') }}</h1>
                    </div>

                    <div class="inner-banner-item">
                        <div class="left">
                            <span>{{ __('translate.Dashboard') }}</span>
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
                            <span>{{ __('translate.Change Password') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner  -->



    <!-- dashboard  start -->
    <section class="dashboard">
        <div class="container">
            <div class="row">
                @include('Frontend.User.sideber')


                <div class="col-lg-9  col-md-8">
                    <div class="dashboard-item-taitel">
                        <h4>{{ __('translate.Dashboard') }}</h4>
                        <p>{{ __('translate.Change Password') }}</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="dashboard-edit-profile-from">
                            <form action="{{route('user.update.password')}}" method="POST">
                                @csrf
                                <div class="shopping-cart-new-address-from">
                                    <div class="shopping-cart-new-address-from-item">
                                        <div class="shopping-cart-new-address-from-inner">
                                            <label for="exampleFormControlInput1" class="form-label">{{ __('translate.Current Password') }}</label>
                                            <input type="password" class="form-control"
                                                id="exampleFormControlInput06"
                                                name="old_password">
                                        </div>
                                    </div>
                                    <div class="shopping-cart-new-address-from-item">
                                        <div class="shopping-cart-new-address-from-inner">
                                            <label class="form-label"> {{ __('translate.New Password') }}</label>
                                            <input type="password" class="form-control"
                                                name="password"
                                                id="exampleFormControlInput14">
                                        </div>
                                        <div class="shopping-cart-new-address-from-inner">
                                            <label class="form-label"> {{ __('translate.Confirm Password') }} </label>
                                            <input type="password" class="form-control"
                                                name="password_confirmation"
                                                id="exampleFormControlInput08">
                                        </div>
                                    </div>



                                    <div class="change-passowerd-btn  ">
                                        <button type="submit" class="main-btn-four"> {{ __('translate.Save Now') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- dashboard end  -->

   <!-- Restaurant part-start -->
    @include('Frontend.User.app')
   <!-- Restaurant part-end -->



</main>
@endsection
