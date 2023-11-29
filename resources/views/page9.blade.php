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
                        <h4 class="mb-40">Useful Information
                            Contact Details</h4>

                        <h6 class="mb-10 fw-400 fz-17">Office Address</h6>
                        <p class="mb-20">
                            1 Millbridge Mews <br>
                            Hertford <br>
                            Hertfordshire <br>
                            SG14 1PY
                        </p>
                        <h6 class="mb-10 fw-400 fz-17">Telephone Number</h6>
                        <p class="mb-20">
                            01992586311
                        </p>

                        <h6 class="mb-10 fw-400 fz-17">Internet Contact</h6>
                        <p class="mb-20">
                            info@pm247.co.uk<br>
                            www.pm247.co.uk
                        </p>

                        <h6 class="mb-10 fw-400 fz-17">Company Registration</h6>
                        <p class="mb-20">
                            Company Number &nbsp;&nbsp; 09315632<br>
                            Vat Number &nbsp;&nbsp; 341277610
                        </p>


                    </div>
                </div>
                <div class="col-12 text-center mt-70">
                    <a href="{{ route('page8') }}" class="butn butn-md form-button-color-back text-light radius-10">

                        <span class="icon fas fa-arrow-left mr-10"></span>
                        <span class="text" data-splitting>Back</span>
                    </a>
                    <a href="{{ route('page10') }}"
                        class="butn butn-md form-button-color text-light radius-10 ml-20 ml-xs-0">
                        <span class="text" data-splitting>Next</span>
                        <span class="icon fas fa-arrow-right ml-10  data-splitting"></span>
                    </a>

                </div>
            </div>

        </div>
    </section>
@endsection
