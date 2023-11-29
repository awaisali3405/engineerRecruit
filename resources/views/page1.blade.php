@extends('layouts.app')

@section('content')
    <section class="section-padding pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="content pl-50 pl-xs-0">
                        <div class="sub-title gr-purple-red-text inline">
                            <span>PM247 Contractor
                                Information Pack</span>
                        </div>
                        <h4 class="mb-40">Content</h4>
                        <ul class="check-list rest mt-20">
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>Who are
                                PM247 ?</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>Why
                                Become a Contractor ?</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>What
                                Happens Next ?</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>Receiving
                                & Dealing with Jobs</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>What is
                                Expected From You</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>Dealing
                                With Our Customers</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>Health &
                                Safety</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>Useful
                                Contacts & Information</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i
                                        class="fas fa-check"></i></span>Registering</li>
                            <li class="mb-10"><span class="icon bg-gray mr-20"><i class="fas fa-check"></i></span>Terms of
                                Agreement</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  wow slideInUp d-none d-sm-none d-md-block"
                    style="visibility: visible; animation-name: slideInUp;">
                    <div class="img wow imago animated" style="visibility: visible;">
                        <img src="{{ asset('assets/img/page1.png') }}" class="page1-img" alt="">
                    </div>
                </div>
                <div class="col-12 text-center mt-70">

                    <a href="{{ route('page2') }}" class="butn butn-md form-button-color text-light radius-10 ml-20">
                        <span class="text" data-splitting>Next</span>
                        <span class="icon fas fa-arrow-right ml-10 data-splitting"></span>
                    </a>

                </div>
            </div>

        </div>
    </section>
@endsection
