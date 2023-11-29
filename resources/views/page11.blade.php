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
                        <h4 class="mb-10">Health & Safety</h4>
                        <h6 class="mb-40">H & S To be followed at all times</h6>
                        <p>
                            Whilst you are at any customers property you are responsible for your own health and
                            safety. Regular checks will be made to insure you are adhering within the company health
                            and safety confines. You must follow this procedure with every Job, failure to do so could
                            result in H & S action being brought against you. Please reveiw our Health & safety
                            documentations which are clear and visible for you to reveiw at your own Convenience.
                        </p>

                        <section class="contact-crv mt-30">
                            <form id="contact-form" method="post" action="{{ route('page12.submit') }}" novalidate="true">
                                @csrf
                                <div class="controls row">

                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Name</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="health_name"
                                                value="{{ old('health_name', $personalDetail->health_name) }}"
                                                placeholder="Jhon Doe" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Date</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="Date" name="health_date"
                                                value="{{ old('health_date', $personalDetail->health_date) }}"
                                                placeholder="Jhon Doe" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="checkbox" name="is_confirm"
                                                {{ old('is_confirm', $personalDetail->is_confirm) ? 'checked' : '' }}
                                                class="checkboxterms" value="1"><span class="check-confirm">I herby
                                                confirm that I have read
                                                and understood the
                                                above procedure and will adhere
                                                to it at all times</span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>



                </div>
                <div class="col-12 text-center mt-70 d-flex justify-content-center">
                    <a href="{{ route('page10') }}" class="butn butn-md form-button-color-back text-light radius-10">

                        <span class="icon fas fa-arrow-left mr-10"></span>
                        <span class="text" data-splitting>Back</span>
                    </a>
                    <button onclick="document.getElementById('contact-form').submit()" style="border:white;"
                        class="butn butn-md form-button-color text-light radius-10 ml-20 ml-xs-0">
                        <span class="text" data-splitting>Next</span>
                        <span class="icon fas fa-arrow-right ml-10  data-splitting"></span>
                    </button>

                </div>
            </div>

        </div>
    </section>
@endsection
