@extends('layouts.app')
@section('content')
    {{-- <form action="{{ route('page13.submit') }}" method="POST">
        @csrf --}}
    <section class="section-padding pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 valign">
                    <div class="content pl-50 pl-xs-0">
                        <div class="sub-title gr-purple-red-text inline">
                            <span>PM247 Contractor
                                Information Pack</span>
                        </div>
                        <h4 class="mb-10">Terms & Conditions</h4>
                        <h6 class="mb-40">Sub Contractors Agreement</h6>
                        <section class="contact-crv mt-30">
                            <form id="contact-form" method="post" action="#" novalidate="true">

                                <div class="controls row">

                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Date</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="Date" name="sub_contractor_date"
                                                value="{{ old('sub_contractor_date', $personalDetail->sub_contractor_date) }}"
                                                onkeyup="document.getElementById('sub_contractor_date').value=this.value"
                                                onchange="document.getElementById('sub_contractor_date').value=this.value"
                                                value="{{ old('sub_contractor_date', $personalDetail->sub_contractor_date) }}"
                                                placeholder="Jhon Doe" required="required">
                                        </div>
                                    </div>
                                    <h6 class="mb-30">PARTIES:</h6>
                                    <div class="steps-vr">
                                        <div class="step flex mb-20">
                                            <div>
                                                <div class="numb fw-600">
                                                    <span class="gr-purple-red-text">01</span>
                                                    <div class="cover gr-green-bg"></div>
                                                </div>
                                            </div>
                                            <div class="cont ml-40">
                                                <p class="fz-13">PM247 (“the Contractor”), and</p>
                                            </div>
                                        </div>
                                        <div class="step flex mb-20">
                                            <div>
                                                <div class="numb fw-600">
                                                    <span class="gr-purple-red-text">02</span>
                                                    <div class="cover gr-green-bg"></div>
                                                </div>
                                            </div>
                                            <div class="ml-40">
                                                <div class="form-group mb-10 has-error has-danger">
                                                    <input type="text" name="term_sub_contractor_name"
                                                        value="{{ old('term_sub_contractor_name', $personalDetail->term_sub_contractor_name) }}"
                                                        onkeyup="document.getElementById('term_sub_contractor_name').value=this.value"
                                                        onchange="document.getElementById('term_sub_contractor_name').value=this.value"
                                                        placeholder="Jhon Doe" required="required">
                                                </div>

                                            </div>
                                            <div class="mb-10 ml-40 mt-3">
                                                <p class="fz-13">(“the Sub-Contractor”)</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </section>
                        <h6 class="mb-30">RECITALS:</h6>

                        <div class="steps-vr">
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">A</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">The Sub-Contractor is an independent Contractor who is in the
                                        business
                                        of Plumbing, Heating,
                                        Gas, Electrical</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">B</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">From time to time the Contractor may require services such as
                                        those
                                        provided by the
                                        Sub-Contractor
                                        and the Sub-Contractor has agreed to supply such services as and when required
                                        on
                                        the
                                        Terms and Conditions contained in this Agreement.</p>
                                </div>
                            </div>
                        </div>

                        <p class="mb-20">It is agreed as follows:</p>

                        <div class="steps-vr">
                            <div class="step flex  mb-40 mt-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-17 fw-600">DEFINITIONS AND INTERPRETATIONS</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">1.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">“Commencement Date” The Date appearing at the beginning of this
                                        Agreement.
                                        “Services” The services to be provided by the Sub-Contractor to the Contractor.
                                        ”Termination Date” The Date this Agreement terminates whensoever or howsoever
                                        arising.
                                        “Customer” The person for whom the Contractor may perform work from time to
                                        time.
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">1.2</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">Clause headings are for ease of reference only and do not affect
                                        interpretation and words
                                        imposing the masculine gender include the feminine, and singular shall include
                                        the
                                        plural
                                        and vice versa.</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">1.3</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">A reference to statutory provisions will be interpreted as a
                                        reference
                                        to the provision as
                                        amended or re-enacted from time to time.</p>
                                </div>
                            </div>
                            <div class="step flex mb-40 mt-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">2</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-17 fw-600 ">THE SUPPLY OF SERVICES</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">2.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">This Agreement will commence on the Commencement Date and will
                                        continue to be subject
                                        to the terms of this Agreement unless and until terminated by either party.</p>
                                </div>
                            </div>
                            <div class="step flex mb-40 mt-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">3</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-17 fw-600 ">THE SUB-CONTRACTOR’S OBLIGATIONS</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">3.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">The Sub-Contractor undertakes at all times during the
                                        continuation of
                                        this Agreement:</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">3.1.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">To devote such time, attention, skill and ability and materials
                                        to
                                        the performance of the
                                        Services as shall be necessary or required;</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">3.1.2</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">To perform all Services in a good and workmanlike manner and to
                                        comply with any
                                        reasonable directions given by the Contractor;</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">3.1.3</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">To complete the Services required within any specified time
                                        limits
                                        provided by the
                                        Contractor and to notify the Contractor immediately in writing if and whenever
                                        it
                                        becomes
                                        reasonably apparent that the Sub-Contractor is unable to comply with any time
                                        limits,
                                        stating the reason(s);</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">3.1.4</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">To treat the Contractor, its employees and officers, other
                                        sub-contractors, customers and
                                        any person with whom the Sub-Contractor encounters whilst providing Services to
                                        the
                                        Contractor, with dignity and respect and not to discriminate on the grounds of
                                        gender,
                                        race, disability, age, marital status, sexual orientation, religion or belief or
                                        any
                                        other ground
                                        protected by law;</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">3.1.5</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">To indemnify and hold the Contractor free from any claims or
                                        liabilities arising from the
                                        supply of Services by the Sub-Contractor under this Agreement;</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">3.1.6</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">If required and at his cost to uncover any part of the work done
                                        by
                                        him, including any
                                        goods or materials used, for inspection on reasonable notice by the Contractor
                                        or by
                                        any
                                        person nominated by the Contractor;</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">3.1.7</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">Not to substitute or delegate the performance of Services for the
                                        Contractor to any other
                                        person, unless agreed in advance in writing with the Contractor;</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">3.1.8</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">To remedy any defective work or remove any improper materials or
                                        goods after receiving
                                        notice in writing from the Contractor.</p>
                                </div>
                            </div>
                            <div class="step flex mb-40 mt-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">4</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-17 fw-600 ">MUTUALITY OF OBLIGATION</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">4.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">There is no obligation on the part of the Contractor to provide
                                        work
                                        for the Sub-Contractor,
                                        nor for the Sub-Contractor to accept any work so offered.</p>
                                </div>
                            </div>
                            <div class="step flex mb-40 mt-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">5</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-17 fw-600 ">PAYMENT</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">5.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">The Contractor shall, within 7 days of the receipt of each weekly
                                        time sheet relating to
                                        Services, pay to the Sub-Contractor such payment as may be due for the hours
                                        performed
                                        by the Sub-Contractor, less any such deductions for tax as the Contractor may be
                                        required
                                        to make by law.</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">5.2</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">The Sub-Contractor will receive,
                                        <input type="text" name="percentage"
                                            value="{{ old('percentage', $personalDetail->percentage) }}"
                                            onkeyup="document.getElementById('percentage').value=this.value"
                                            onchange="document.getElementById('percentage').value=this.value"eholder=""
                                            required="required"> %
                                        unless an enhanced rate/payment is agreed in
                                        writing and in advance of the Services provided by the Sub-Contractor.
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-40 mt-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">6</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-17 fw-600 ">PAYMENT</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">6.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">The Contractor shall, within 7 days of the receipt of each weekly
                                        time sheet relating to
                                        Services, pay to the Sub-Contractor such payment as may be due for the hours
                                        performed
                                        by the Sub-Contractor, less any such deductions for tax as the Contractor may be
                                        required
                                        to make by law.</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">6.2</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">By the Sub-Contractor on notice in writing with immediate effect
                                        without the Sub-Contractor
                                        incurring any liability for compensation or damages if the Contractor breaches
                                        any
                                        terms
                                        of this Agreement unless, such breach being capable of remedy, the Contractor
                                        remedies
                                        such breach within fourteen days of being requested to do so by the
                                        Sub-Contractor;
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">6.3</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">By either party by notice in writing with immediate effect if it
                                        is
                                        unable to commence,
                                        continue or completely perform its obligations hereunder by reason of force
                                        majeure,
                                        fire,
                                        flood, aircraft damage, explosion, electrical failure, strikes, lock outs,
                                        riots,
                                        civil commotion,
                                        state of national emergency or government action or any cause whatsoever
                                        (whether or
                                        not
                                        of similar nature to the foregoing) affecting it;</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">6.4</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">By either party giving seven days notice in writing to the other.
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-40 mt-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">7</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-17 fw-600 ">ACCIDENT/INJURY</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">7.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">The Contractor shall not be liable for any damages or
                                        compensation
                                        payable at law in
                                        respect or consequence of any accident or injury to any workman in the
                                        Sub-Contractor’s
                                        employment save and accept an accident or injury resulting from any act or
                                        default
                                        of
                                        the Contractor, and the Sub-Contractor shall indemnify the Contractor and keep
                                        him
                                        indemnified against all such damages and compensation (save and accept as
                                        aforesaid)
                                        and against any expense, liability, loss, claim or proceedings whatsoever in
                                        respect
                                        thereof
                                        or in relation thereto.</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">7.2</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">The Sub-Contractor shall indemnify the Contractor against any
                                        expenses, liability, claim or
                                        proceedings in respect of any injury or damage whatsoever to any property, real
                                        or
                                        personal, including the current works or site in so far as such injury or damage
                                        arises out of
                                        or in the course of or by reason of the carrying out of the Services, to the
                                        extent
                                        that the
                                        same is due to any negligence, breach of statutory duty, omission or default of
                                        the
                                        Sub-Contractor or any person for whom the Sub-Contractor is responsible.</p>
                                </div>
                            </div>
                            <div class="step flex mb-40 mt-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">8</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-17 fw-600 ">INSURANCE</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">8.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        The Sub-Contractor will take out and maintain for the duration of the period for
                                        which the Sub-Contractor carries out any Services pursuant to the terms of this
                                        Agreement:
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">8.1.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        Insurance in respect of claims of personal injury to, or the death of persons
                                        under
                                        contracts
                                        of service or apprenticeships with the Sub-Contractor and arising out of and in
                                        the
                                        course
                                        of such person’s employment which shall comply with the Employer’s Liability
                                        (Compulsory Insurance) Act 1969 and any statutory Orders made there under or any
                                        amendment or re-enactment made thereof for a value of not less than £500,000.00
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">8.1.2</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        Insurance in respect of any claims arising out of his liability referred to in
                                        Clause 3.1.5.
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">8.2</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        The Sub-Contractor shall produce evidence to show that the necessary insurance
                                        has
                                        been
                                        effected and maintained at the request of the Contractor.
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-40 mt-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">9</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-17 fw-600 ">THE SUB-CONTRACTOR’S ACKNOWLEDGEMENTS</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">9.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        The Sub-Contractor shall ensure that it at all times complies with all statutory
                                        and
                                        legal obligations upon it in respect of the Services it is providing and with
                                        all
                                        its legal requirements under this Agreement.
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">9.2</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        The Sub-Contractor acknowledges that they are not an employee of the Contractor
                                        and
                                        nothing in this Agreement shall be construed as creating an employer/employee
                                        relationship between the Contractor and the Sub-Contractor.
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-40 mt-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">10</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-17 fw-600 ">AMENDMENT</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">10.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        Any amendment to the provisions of the Agreement shall be in writing and signed
                                        by
                                        the parties or their duly authorised representatives.
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-40 mt-40">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">11</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-17 fw-600 ">GENERAL</p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">11.1</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        This Agreement shall take effect in substitution of all previous agreements and
                                        arrangements (if any) whether written, oral or implied between the
                                        Sub-Contractor
                                        and
                                        the Contractor, relating to the Services for the Contractor and to be provided
                                        by
                                        the
                                        Sub-Contractor and all such agreements and arrangements still effective at the
                                        date
                                        hereof (if any) shall be deemed to have been terminated by mutual consent with
                                        effect from
                                        the Commencement Date.
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">11.2</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        This Agreement shall be governed by and construed in all respects in accordance
                                        with
                                        English Law and the parties to this Agreement submit to the exclusive
                                        jurisdiction
                                        of the courts of England and Wales.
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">11.3</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        The arbitration of a single arbitrator (who, failing agreement, shall be
                                        appointed
                                        by the President or Vice President of the RICS) shall determine any dispute or
                                        difference arising out of or in connection with this Agreement and the award of
                                        such
                                        arbitrator shall be final and binding on the parties.
                                    </p>
                                </div>
                            </div>
                            <div class="step flex mb-20">
                                <div>
                                    <div class="numb fw-600">
                                        <span class="gr-purple-red-text">11.4</span>
                                        <div class="cover gr-green-bg"></div>
                                    </div>
                                </div>
                                <div class="cont ml-40">
                                    <p class="fz-13">
                                        In the event of any clause contained in this Agreement or any part thereof being
                                        declared invalid or unenforceable, all of the clauses or parts thereof contained
                                        in
                                        this Agreement shall remain in full force and effect and shall not be effected
                                        thereby.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <section class="contact-crv mt-30">
                            <form id="contact-form" method="post" action="#" novalidate="true">

                                <div class="controls row">

                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Signature Of Contractor</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="text" name="contractor_name"
                                                value="{{ old('contractor_name', $personalDetail->contractor_name) }}"
                                                onkeyup="document.getElementById('contractor_name').value=this.value"
                                                onchange="document.getElementById('contractor_name').value=this.value"
                                                placeholder="Jhon Doe" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="mb-10">
                                            <h6 class="fw-400 fz-14">Dated</h6>
                                        </div>
                                        <div class="form-group mb-30 has-error has-danger">
                                            <input type="Date" name="contractor_date"
                                                value="{{ old('contractor_date', $personalDetail->contract_date) }}"
                                                onkeyup="document.getElementById('contractor_date').value=this.value"
                                                onchange="document.getElementById('contractor_date').value=this.value"
                                                placeholder="Jhon Doe" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group flex">
                                            <input type="checkbox" name="is_contact_confirm"
                                                value="{{ old('is_contact_confirm', $personalDetail->is_contact_confirm) }}"
                                                onkeyup="document.getElementById('is_contact_confirm').value=this.value"
                                                onchange="document.getElementById('is_contact_confirm').value=this.value"
                                                onclick="document.getElementById('is_contact_confirm').value=this.value"
                                                class="checkboxterms checkboxterms1" value="1"><span
                                                class="check-confirm ml-30">I herby confirm that I
                                                have read and understood the terms herewith and throughout the
                                                contractors
                                                Information Pack. I
                                                agree to undertake work on the above terms and conform to the
                                                information
                                                contained</span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
                <form action="{{ route('page13.submit') }}" id="hidden-form" method="post" class="d-none">
                    @csrf
                    <input type="hidden" name="sub_contractor_date" id="sub_contractor_date"
                        value="{{ old('sub_contractor_date', $personalDetail->sub_contractor_date) }}">
                    <input type="hidden" name="term_sub_contractor_name" id="term_sub_contractor_name"
                        value="{{ old('term_sub_contractor_name', $personalDetail->term_sub_contractor_name) }}">
                    <input type="hidden" name="percentage" id="percentage"
                        value="{{ old('percentage', $personalDetail->percentage) }}">
                    <input type="hidden" name="contractor_name" id="contractor_name"
                        value="{{ old('contractor_name', $personalDetail->contractor_name) }}">
                    <input type="hidden" name="contract_date" id="contractor_date"
                        value="{{ old('contractor_date', $personalDetail->contract_date) }}">
                    <input type="hidden" name="is_contact_confirm" id="is_contact_confirm"
                        value="{{ old('is_contact_confirm', $personalDetail->is_contact_confirm) }}">
                </form>
                <div class="col-12 text-center mt-70 d-flex justify-content-center">
                    <a href="{{ route('page11') }}" class="butn butn-md form-button-color-back text-light radius-10">

                        <span class="icon fas fa-arrow-left mr-10"></span>
                        <span class="text" data-splitting>Back</span>
                    </a>
                    <button onclick="document.getElementById('hidden-form').submit()" style="border:white;"
                        class="butn butn-md form-button-color text-light radius-10 ml-20 ml-xs-0">
                        <span class="text" data-splitting>Submit</span>
                        <span class="icon fas fa-check ml-10  data-splitting"></span>
                    </button>

                </div>
            </div>

        </div>
    </section>
    {{-- </form> --}}
@endsection
