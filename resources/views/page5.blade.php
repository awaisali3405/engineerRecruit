@extends('layouts.app')
@section('content')
    <section class="section-padding pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 valign">


                    <div class="content pl-50 pl-xs-0">
                        <div class="sub-title gr-purple-red-text inline">
                            <span>PM247 Contractor
                                Information Pack</span>
                        </div>

                        <h4 class="mb-40">What Happens
                            Next...</h4>

                        <div class="steps-vr">
                            <div class="step flex mb-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">01</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">Complete the forms herewith in this application &
                                        upload the requested documents</p>
                                </div>
                            </div>
                            <div class="step flex mb-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">02</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">PM247 will email you a copy of the application &
                                        PM247 will receive the application form by email</p>
                                </div>
                            </div>
                            <div class="step flex mb-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">03</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">Your profile is created on our system & you will
                                        receive login details to the app</p>
                                </div>
                            </div>
                            <div class="step flex mb-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">04</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">PM247 onboarding team will arrange a call to
                                        help use the app & set your availability</p>
                                </div>
                            </div>
                            <div class="step flex mb-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">05</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">PM247 onboarding will run through the
                                        process of your first job</p>
                                </div>
                            </div>

                            <p>Please Note: Some of the jobs undertaken may be audited</p>
                        </div>

                    </div>
                </div>
                <div class="col-12 text-center mt-70">
                    <a href="{{ route('page4') }}" class="butn butn-md form-button-color-back text-light radius-10">

                        <span class="icon fas fa-arrow-left mr-10"></span>
                        <span class="text" data-splitting>Back</span>
                    </a>
                    <a href="{{ route('page6') }}"
                        class="butn butn-md form-button-color text-light radius-10 ml-20 ml-xs-0">
                        <span class="text" data-splitting>Next</span>
                        <span class="icon fas fa-arrow-right ml-10  data-splitting"></span>
                    </a>

                </div>
            </div>

        </div>
    </section>
@endsection
