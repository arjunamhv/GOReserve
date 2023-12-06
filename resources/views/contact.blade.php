@extends('layouts.app')

@section('content')
<section class="px-4 lg:px-32 py-16">
    <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
          <h2
            class="font-bold text-dark text-2xl mb-4 sm:text-3xl lg:text-4xl tracking-widest"
          >
            CONTACT
          </h2>
        </div>
      </div>
    <div class="flex justify-start items-center mb-5">
        <img src="{{ asset('img/laptop.png') }}" class="w-1/3 mr-10 hidden lg:block" alt="" />
        <p class="text-justify text-sm lg:text-base font-small text-gray-500">Welcome to our contact page! We are always ready to listen to you. Do you have
            questions, suggestions, or need help?.
            Please use the contact form below or contact us by email or phone. We are committed to providing you
            with a fast response and the best service. Thank you for contacting us!</p>
    </div>
    <!-- Contact -->
    <div class="bg-[#DDE6ED] rounded-lg shadow-lg mb-5">
        <div class="px-8 lg:px-16 py-8 flex items-center justify-between">
            <i class="fa-solid fa-phone fa-3x hidden lg:block"></i>
            <div class="text-left lg:text-right">
                <p class="text-sm lg:text-base font-small text-gray-500 mb-2">Call this number when you have questions</p>
                <p class="text-sm lg:text-base font-semibold text-slate-800">+62 81-235-192-203 or +14255551212</p>
                <p class="text-xs lg:text-sm font-small text-slate-800">(Monday to Friday, 7am to 4pm)</p>
            </div>
        </div>
    </div>
    <div class="bg-[#DDE6ED] rounded-lg shadow-lg mb-5">
        <div class="px-8 lg:px-16 py-8 flex justify-between items-center">
            <i class="fa-regular fa-envelope fa-3x hidden lg:block"></i>
                <p class="text-xs lg:text-base font-small text-gray-500 w-[50%]">just send us your questions or concerns by starting a new case and we
                    will give you the help you</p>
                <a href="#" class="text-center text-sm text-small lg:text-base lg:font-semibold text-white bg-sky-800 p-3 rounded-lg hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out w-[30%]">Start Chat</a>
        </div>
    </div>
    <div class="bg-[#DDE6ED] rounded-lg shadow-lg mb-5">
        <div class="px-8 lg:px-16 py-8 flex justify-between items-center">
            <i class="fa-solid fa-comments fa-3x hidden lg:block"></i>
            <p class="text-sm lg:text-base font-small text-gray-500 w-1/2">chat with our in-house members</p>
            <a href="#" class="text-center text-sm text-small lg:text-base lg:font-semibold text-white bg-sky-800 p-3 rounded-lg hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out w-[30%]">Start Chat</a>
        </div>
    </div>
    <div class="bg-[#DDE6ED] rounded-lg shadow-lg mb-5">
        <div class="px-8 lg:px-16 py-8 flex justify-between items-center">
            <i class="fa-solid fa-location-dot fa-3x hidden lg:block"></i>
            <p class="text-sm w-full lg:text-base font-small text-gray-500 lg:w-auto">Jl. Panglima Sudirman No.58, Kronggahan, Kec. Mejayan, Kab. Madiun,
                Jawa Timur 63513</p>
        </div>
    </div>
</section>
@endsection
