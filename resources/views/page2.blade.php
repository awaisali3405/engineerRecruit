@extends('layouts.app')
@section('content')
    <section class="section-padding pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 valign">
                    <div class="content pl-50 pl-xs-0">
                        <div class="sub-title gr-purple-red-text inline">
                            <span>PM247 Contractor
                                Information Pack</span>
                        </div>
                        <h4 class="mb-40">Objectives
                            Of This Pack</h4>
                        <ul class="check-list rest mt-20">
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>An Overview
                                of who we are</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>How PM247
                                can benefit you</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i
                                        class="fas fa-check"></i></span>Understanding
                                what we expect from you</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>Overview
                                of Codes of Conduct &
                                Standards of Performance</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>Inform
                                you of PM247 terms of
                                business</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp d-none d-sm-none d-md-block valign"
                    style="visibility: visible; animation-name: slideInUp;">
                    <div class="img wow imago animated" style="visibility: visible;">
                        <img src="assets/img/page2.png" class="page2-img" alt="">
                    </div>
                </div>
                <div class="col-12 text-center mt-70">
                    <a href="{{ route('page1') }}" class="butn butn-md form-button-color-back text-light radius-10">

                        <span class="icon fas fa-arrow-left mr-10"></span>
                        <span class="text" data-splitting>Back</span>
                    </a>
                    <a href="{{ route('page3') }}"
                        class="butn butn-md form-button-color text-light radius-10 ml-20 ml-xs-0">
                        <span class="text" data-splitting>Next</span>
                        <span class="icon fas fa-arrow-right ml-10  data-splitting"></span>
                    </a>

                </div>
            </div>

        </div>
    </section>
@endsection
