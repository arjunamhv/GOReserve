@extends('layouts.app')

@section('content')
<section class="md:flex flex-row justify-left items-center flex-wrap">
    <div class="inline-block w-full md:w-1/2 p-5 pl-6 min-w-sm text-center">
        <h1 class="text-4xl font-bold p-1"><b>FAQ</b></h1>
        <p class="p-1" style="color: gray;">
            Have questions about our platform? 
            <br>We have answers! Here are some general responses 
            <br>that may be helpful.
        </p>        
    </div>
        <div class="inline-block w-full md:w-1/2 p-5 min-w-sm">
            <img src="{{ asset('img/faq.png') }}" alt="img.faq" style="width: 38%; height: auto;">
        </div>        
</section>
<section>
    <div class="card-title pl-4"><b>GENERAL</b></div>
    <hr class="my-4 border-2 border-gray-300">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <b>Why do UMKM businesses need a sports hall rental ?</b>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    UMKM business actors need a sports hall rental website to help make it easier for people to find sports halls, make it easier to make reservations, and also see which sports halls are still empty and find out the overall sport schedule.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-10">
    <div class="card-title pl-4"><b>SERVICE</b></div>
    <hr class="my-4 border-2 border-gray-300">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <b>How to use the ticket ?</b>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                        <li>If you received a ticket, bring it with you to the sports hall on the specified date and time.</li>
                        <li>If your reservation is tied to your account on the platform, ensure you have the necessary details for verification.</li>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <hr class="my-4 border-2 border-gray-300">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <b>How can I make payment ?</b>
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                Select an available payment method
                <br>Enter payment details and confirm the order after verification.
            </div>
        </div>
    </div>
</section>

<section>
    <hr class="my-4 border-2 border-gray-300">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <b>How to become a partner ?</b>
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            1. Select Company or Platform:
                <li>Decide which companies or platforms you want to partner with. This could be an online ordering platform, delivery service, or other business that offers a partner program.</li>

            2. Visit Website or App:
                <li>Visit the website or download the app of the company or platform you want to partner with.</li>

            3. Search Partner Information:
                <li>Find sections or pages on a website or app that contain information about partner programs.</li>

            4. Read the Terms and Conditions:
                <li>Research partner program terms and conditions. This may include eligibility requirements, fee requirements, or other commitments.</li>

            5. Register or Apply:
                <li>If you agree to the terms and conditions, follow the registration process or submit a partner application according to the instructions provided.</li>

            6. Fill in Personal or Business Information:
                <li>During the registration process, you may be asked to fill in your personal or business information. Make sure to provide accurate and complete information.</li>

            7. Identity or Business Verification:
                <li>Some companies or platforms may request verification of your identity or business as a security measure.</li>

            8. Wait for Approval:
                <li>After submitting the application, wait for approval from the company or platform. This process may take varying amounts of time depending on their policies.</li>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection