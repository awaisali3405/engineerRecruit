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
                        <h4 class="mb-40">Who are PM247</h4>
                        <p>
                            We provide professional experienced Plumbing, Heating, Drainage &
                            Electrical Services. We use quality tradesmen who are
                            vetted and whose work is inspected on a regular ongoing basis, to ensure
                            we deliver the service we pride ourselves on.
                        </p>
                        <p>
                            We offer our customers Professional & Friendly Emergency Plumbing, Heating and Drainage
                            Engineers who are qualified and Experienced. All the engineers we contract are fully insured and
                            we guarantee everything they do. Our Customers Tell us their problem and we will tell them how
                            we can fix it and exactly what they can expect to pay.
                        </p>
                        <p>
                            Our phones are manned around the clock and our friendly and courteous staff understand the
                            importance of being clear and concise so our customers can always rely on us whenever they have
                            an emergency or any other DIY/Property Maintenance requirement.
                        </p>
                        <p>
                            A professional affordable service, meaning we keep our customers for life....
                        </p>
                    </div>
                </div>
                <div class="col-12 text-center mt-70">
                    <a href="{{ route('page2') }}" class="butn butn-md form-button-color-back text-light radius-10">

                        <span class="icon fas fa-arrow-left mr-10"></span>
                        <span class="text" data-splitting>Back</span>
                    </a>
                    <a href="{{ route('page4') }}"
                        class="butn butn-md form-button-color text-light radius-10 ml-20 ml-xs-0">
                        <span class="text" data-splitting>Next</span>
                        <span class="icon fas fa-arrow-right ml-10  data-splitting"></span>
                    </a>

                </div>
            </div>

        </div>
    </section>
@endsection
