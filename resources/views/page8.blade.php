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
                        <h4 class="mb-10">Dealing With
                            Our Customers</h4>
                        <h6 class="mb-40">Some Powerful PM247 Beliefs</h6>
                        <div class="steps-vr">
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">01</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">Take the opportunity to take your time and build
                                        the relationship..... Don’t be in a rush.</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">02</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">People buy trust......they buy the relationship.</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">03</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">What is a good job in the eyes of the customer
                                        is all that matters.</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">04</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">If you think you’re doing a good job and the
                                        customer doesn’t, the customer is right and
                                        you’re wrong, the faster you understand this
                                        the more successful you will be.</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">05</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">Do what you promised you’d do.</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">06</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">Turn up on time.......Do a good job & all with a smile on your face !
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">07</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">Understand that PM247 is fantastic; your income is determined directly
                                        by how
                                        hard & smart you work</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">08</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">Don’t be scared of new products or bigger jobs with the support of
                                        PM247 staff</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">09</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">Go the extra mile and do little things to differentiate you from other
                                        people, like
                                        vacuuming up after yourself, etc.</p>
                                </div>
                            </div>
                            <div class="step flex">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">10</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        Customer Services is not a department it is an Attitude.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-70">
                    <a href="{{ route('page7') }}" class="butn butn-md form-button-color-back text-light radius-10">

                        <span class="icon fas fa-arrow-left mr-10"></span>
                        <span class="text" data-splitting>Back</span>
                    </a>
                    <a href="{{ route('page9') }}"
                        class="butn butn-md form-button-color text-light radius-10 ml-20 ml-xs-0">
                        <span class="text" data-splitting>Next</span>
                        <span class="icon fas fa-arrow-right ml-10  data-splitting"></span>
                    </a>

                </div>
            </div>

        </div>
    </section>
@endsection
