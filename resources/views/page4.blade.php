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
                        <h4 class="mb-40">Why Become
                            A PM247 Contractor</h4>

                        <h6 class="mb-10 fw-400 fz-17">We provide regular & varied work...</h6>
                        <p class="mb-20">
                            From planned installation work to 24/7 emergency call outs.
                        </p>
                        <h6 class="mb-10 fw-400 fz-17">Competetive Rates & Good
                            Payment terms...</h6>
                        <p class="mb-20">
                            We Charge good rates meaning you earn equivilant to your own jobs.Average payment term are 1-2
                            weeks.
                        </p>

                        <h6 class="mb-10 fw-400 fz-17">It’s Free!...</h6>
                        <p class="mb-20">
                            We do not charge for the work we pass you, we just give you a great opportunity to earn money
                            without the stress of all the admin work.
                        </p>

                        <h6 class="mb-10 fw-400 fz-17">Detailed Work Descriptions...</h6>
                        <p class="mb-20">
                            We explain precisely & clearly thescope of work required and any pricing information, before you
                            accept the job.
                        </p>

                        <h6 class="mb-10 fw-400 fz-17">Support Network...</h6>
                        <p class="mb-20">
                            Trained Head Offce, technical advise support teams available to you 24/7 via advanced
                            communications.
                        </p>

                        <h6 class="mb-10 fw-400 fz-17">Flexible Coverage...</h6>
                        <p class="mb-20">
                            Manage your time efficiently, set your availability on the app & we will fit work in to suit
                            you.
                        </p>

                    </div>
                </div>
                <div class="col-12 text-center mt-70">
                    <a href="{{ route('page3') }}" class="butn butn-md form-button-color-back text-light radius-10">

                        <span class="icon fas fa-arrow-left mr-10"></span>
                        <span class="text" data-splitting>Back</span>
                    </a>
                    <a href="{{ route('page5') }}" class="butn butn-md form-button-color text-light radius-10 ml-20 ml-xs-0">
                        <span class="text" data-splitting>Next</span>
                        <span class="icon fas fa-arrow-right ml-10  data-splitting"></span>
                    </a>

                </div>
            </div>

        </div>
    </section>
@endsection
