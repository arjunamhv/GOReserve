@extends('layouts.app')

@section('contact')
    <div class="container mt-5">
        <div class="row col-md-12 mb-5">
            <div class="col-md-4 d-flex p-0">
                <img src="{{ asset('img/laptop.png') }}" class="img-fluid rounded-3" alt="" />
            </div>
            <div class="col-md-6 ms-5 align-items-center d-flex p-0">
                <p class="card-text">Welcome to our contact page! We are always ready to listen to you. Do you have
                    questions, suggestions, or need help?.
                    Please use the contact form below or contact us by email or phone. We are committed to providing you
                    with a fast response and the best service. Thank you for contacting us!</p>
            </div>
        </div>
        <!-- Contact -->
        <div class="row col-md-12 fade-in" style="margin-bottom: 5em;">
            <div class="row col-md-12 me-3 mb-5 p-4 rounded-3 testimoni-background shadow-lg d-flex align-items-center">
                <div class="col-md-1 d-flex p-0">
                    <i class="fa-solid fa-phone fa-5x"></i>
                </div>
                <div class="col-md-8 d-flex align-items-center p-0">
                    <div class="card-body">
                        <p class="card-title w-50 m-0">Call this number when you have questions</p>
                        <p class="card-title w-50">+62 81-235-192-203 Or +14255551212</p>
                        <p class="card-title w-50">(Monday to Friday, 7am to 4pm)</p>
                    </div>
                </div>
            </div>
            <div class="row col-md-12 me-3 mb-5 p-4 rounded-3 testimoni-background shadow-lg d-flex align-items-center">
                <div class="col-md-1 d-flex p-0">
                    <i class="fa-regular fa-envelope fa-5x"></i>
                </div>
                <div class="col-md-8 d-flex align-items-center p-0">
                    <div class="card-body">
                        <p class="card-title w-50 m-0">just send us your questions or concerns by starting a new case and we
                            will give you the help you</p>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center d-flex align-items-center">
                    <a href="#" class="btn text-light fw-bold px-5"
                        style="padding: 15px; background-color: #9DB2BF;">Start Chat</a>
                </div>
            </div>
            <div class="row col-md-12 me-3 mb-5 p-4 rounded-3 testimoni-background shadow-lg d-flex align-items-center">
                <div class="col-md-1 d-flex p-0">
                    <i class="fa-solid fa-comments fa-5x"></i>
                </div>
                <div class="col-md-8 d-flex align-items-center p-0">
                    <div class="card-body">
                        <p class="card-title w-50 m-0">chat with our in-house members</p>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center d-flex align-items-center">
                    <a href="#" class="btn text-light fw-bold px-5"
                        style="padding: 15px; background-color: #9DB2BF;">Start Chat</a>
                </div>
            </div>
            <div class="row col-md-12 me-3 mb-5 p-4 rounded-3 testimoni-background shadow-lg d-flex align-items-center">
                <div class="col-md-1 d-flex p-0">
                    <i class="fa-solid fa-location-dot fa-5x"></i>
                </div>
                <div class="col-md-8 d-flex align-items-center p-0">
                    <div class="card-body">
                        <p class="card-title w-50 m-0">Jl. Panglima Sudirman No.58, Kronggahan, Kec. Mejayan, Kab. Madiun,
                            Jawa Timur 63513</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
