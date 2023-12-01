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
                        <h4 class="mb-30">Personal Details To Be Completed</h4>
                        <h6 class="mb-40">Personal Details</h6>

                        <section class="contact-crv mt-30">
                            <form id="contact-form" method="post" action="{{ route('page11.submit') }}"
                                enctype="multipart/form-data" novalidate="true">
                                @csrf
                                <div class="controls row">

                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">First Name</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="first_name" value="{{ old('first_name') }}"
                                                placeholder="Jhon Doe" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Last Name</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="last_name" value="{{ old('last_name') }}"
                                                placeholder="Jhon Doe" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">National Insurance</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="national_insurance"
                                                value="{{ old('national_insurance') }}" placeholder="AB 12 34 56"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Date Of Birth</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="Date" name="dob" value="{{ old('dob') }}"
                                                placeholder="Jhon Doe" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Email Address</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                placeholder="JhonDoe@example.com" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Postcode</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="post_code" value="{{ old('post_code') }}"
                                                placeholder="N8 342" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Telephone 1</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="telephone1" value="{{ old('telephone1') }}"
                                                placeholder="07264 598735" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Mobile</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="mobile" value="{{ old('mobile') }}"
                                                placeholder="07264 598735" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Address</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <textarea id="form_message" name="address" value="{{ old('address') }}" placeholder="Flat 3,123 Rumford" rows="3"
                                                required="required"></textarea>
                                        </div>

                                    </div>
                                    <h6 class="mb-50 mt-20">Emergency Contact Details</h6>

                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">First Name</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="e_first_name" value="{{ old('e_first_name') }}"
                                                placeholder="Jhon Doe" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Last Name</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="e_last_name" value="{{ old('e_last_name') }}"
                                                placeholder="Jhon Doe" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Email Address</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="email" name="e_email" value="{{ old('e_email') }}"
                                                placeholder="JhonDoe@example.com" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Postcode</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="e_post_code" value="{{ old('e_post_code') }}"
                                                placeholder="N8 342" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Telephone 1</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="e_telephone1" value="{{ old('e_telephone1') }}"
                                                placeholder="07264 598735" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Mobile</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="e_mobile" value="{{ old('e_mobile') }}"
                                                placeholder="07264 598735" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Address</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <textarea name="e_address" value="{{ old('e_address') }}" placeholder="Flat 3,123 Rumford" rows="3"
                                                required="required"></textarea>
                                        </div>

                                    </div>

                                    <h6 class="mb-50 mt-20">Bank Details</h6>

                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Bank Name</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="bank_name" value="{{ old('bank_name') }}"
                                                placeholder="Iloyd's Bank" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Sort Code</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="bank_short_code"
                                                value="{{ old('bank_short_code') }}" placeholder="01-20-30"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Account Number</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="bank_account_number"
                                                value="{{ old('bank_account_number') }}" placeholder="12345678"
                                                required="required">
                                        </div>
                                    </div>

                                    <h6 class="mb-50 mt-20">Criminal Offences</h6>

                                    <div class="col-12">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Have you ever been convicted of a criminal offence
                                            </h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <div class="row">
                                                <div class="col-12"><input type="checkbox" name="is_criminal"
                                                        {{ old('is_criminal') == 1 ? 'checked' : '' }} value="1"
                                                        class="checkboxterms cb" value=""
                                                        onchange="cbChange(this)">
                                                    <span class="check-confirm">Yes</span>
                                                </div>
                                                <div class="col-12"><input type="checkbox" name="is_criminal"
                                                        {{ old('is_criminal') == 0 ? 'checked' : '' }} value="0"
                                                        class="checkboxterms cb" onchange="cbChange(this)"
                                                        value="">
                                                    <span class="check-confirm">No</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">If yes, please give details (under the Rehabilitation
                                                of Offenders Act 1974, spent convictions need
                                                not be declared)</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <textarea name="criminal_detail" value="{{ old('criminal_detail') }}" placeholder="" rows="3"
                                                required="required"> {{ old('criminal_detail') }}</textarea>
                                        </div>
                                    </div>

                                    <h6 class="mb-50 mt-20">Required Documents</h6>

                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Proof of ID (driving licence or Passport)</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="file" name="proof_id_img" value="{{ old('proof_id_img') }}"
                                                placeholder="Iloyd's Bank" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Proof of address (bill or letter)</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="file" name="proof_of_address_img"
                                                value="{{ old('proof_of_address_img') }}" placeholder="Iloyd's Bank"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Proof of Public Liability Insurance</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="file" name="proof_of_public_img"
                                                value="{{ old('proof_of_public_img') }}" placeholder="Iloyd's Bank"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">DBS check</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="file" name="proof_of_dbs_img"
                                                value="{{ old('proof_of_dbs_img') }}" placeholder="Iloyd's Bank"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Gas Safe - Picture of front of gas sage card</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="file" name="proof_of_gas_front_img"
                                                value="{{ old('proof_of_gas_front_img') }}" placeholder="Iloyd's Bank"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">
                                                <h6 class="fw-400 fz-14">Gas Safe - Picture of back of gas sage card</h6>
                                            </h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="file" name="proof_of_gas_back_img"
                                                value="{{ old('proof_of_gas_back_img') }}" placeholder="Iloyd's Bank"
                                                required="required">
                                        </div>
                                    </div>

                                    <h6 class="mb-50 mt-20">Declaration</h6>

                                    <div class="col-12 mb-30">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">I certify that ALL information detailed is correct to
                                                the best of my knowledge.</h6>
                                        </div>
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">I understand that misrepresentation, falsification or
                                                omission of factual information requested on
                                                this application form may result in disciplinary action up to and including
                                                dismissal.</h6>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Name</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="declaration_name"
                                                value="{{ old('declaration_name') }}" placeholder="Iloyd's Bank"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Date</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="date" name="declaration_date"
                                                value="{{ old('declaration_date') }}" placeholder="01-20-30"
                                                required="required">
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </section>
                    </div>



                </div>
                <div class="col-12 text-center mt-70 d-flex justify-content-center ">
                    <a href="{{ route('page9') }}" class="butn butn-md form-button-color-back text-light radius-10">

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
