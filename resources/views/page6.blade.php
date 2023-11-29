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

                        <h4 class="mb-40">Receiving & Dealing
                            With Jobs</h4>

                        <div class="steps-vr">
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">01</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        Conduct yourself & approach customers in a friendly and courteous way at all times.
                                    </p>
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
                                    <p class="fz-13">Make a note of your time of arrival on site.</p>
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
                                    <p class="fz-13">
                                        An attempt should firstly be made to diagnose the problem through visual inspection.
                                        DO NOT FIX
                                    </p>
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
                                    <p class="fz-13">
                                        If this fails and work is required to attempt a diagnosis then call the office. The
                                        office will confirm a price with the customer and inform you immediately to proceed.
                                    </p>
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
                                    <p class="fz-13">Report the diagnosis to the office, the office will confirm a price
                                        with the customer and will
                                        send contracts to be signed and payment links to be paid.</p>
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
                                    <p class="fz-13">The office will confirm when the contracts are signed and payment
                                        made. Your
                                        assistance may be required to help the customer through this process.</p>
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
                                    <p class="fz-13">Carry out the work to the required high standard of PM247.</p>
                                </div>
                            </div>
                            <div class="step flex">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">08</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">Call the office when the work is complete to check we have payment
                                        BEFORE you leave the
                                        property.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-12 text-center mt-70">
                    <a href="{{ route('page5') }}" class="butn butn-md form-button-color-back text-light radius-10">

                        <span class="icon fas fa-arrow-left mr-10"></span>
                        <span class="text" data-splitting>Back</span>
                    </a>
                    <a href="{{ route('page7') }}"
                        class="butn butn-md form-button-color text-light radius-10 ml-20 ml-xs-0">
                        <span class="text" data-splitting>Next</span>
                        <span class="icon fas fa-arrow-right ml-10  data-splitting"></span>
                    </a>

                </div>
            </div>

        </div>
    </section>
@endsection
