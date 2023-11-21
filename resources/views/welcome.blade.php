@extends('layouts.guest')

@section('content')
    <section class="md:flex flex-row justify-between items-center flex-wrap">
        <div class="inline-block w-full md:w-1/2 p-5 pl-6 min-w-sm">
            <h1 class="text-4xl font-bold p-1">Find and book sports facilities near you</h1>
            <p class="p-1">GOReserve is the easiest way to find and book sports facilities. With our platform, you can
                quickly search for available sports halls and make hassle-free reservations.</p>
                @auth
                <button class="btn btn-primary">Search GOR</button>
                <button class="btn btn-outline btn-primary">Learn More</button>
                @endauth
                @guest
                <a class="btn btn-primary" href="{{ url('register') }}">Sign up</a>
                <a class="btn btn-outline btn-primary" href="{{ url('login') }}">Login</a>
                @endguest
        </div>
        <div class="inline-block w-full md:w-1/2 p-5 min-w-sm">
            <img src="{{ asset('/assets/images/landing1.jpg') }}" alt="Landing.img">
        </div>
    </section>
    <section class="md:flex flex-row justify-between items-center flex-wrap">
        <div class="inline-block w-full md:w-1/2 p-5 min-w-sm">
            <img src="{{ asset('/assets/images/landing2.jpg') }}" alt="Landing.img">
        </div>
        <div class="inline-block w-full md:w-1/2 p-5 pl-6 min-w-sm">
            <h1 class="text-4xl font-bold p-1">Discover and book sports facilities with ease on GOReserve platform.</h1>
            <p class="p-1">Find, book, and pay for sports facilities nearby in just a few simple steps.</p>
            <li class="p-1">Search for available sports facilities in your area.</li>
            <li class="p-1">Securely book your preferred sports facility online.</li>
            <li class="p-1">Conveniently pay for your sports facility reservation.</li>
        </div>
    </section>
    <section class="md:flex flex-row justify-between items-center flex-wrap">
        <div class="inline-block w-full md:w-1/2 p-5 pl-6 min-w-sm">
            <a href="#item1">
                <h1 class="text-lg font-bold p-1">Discover Sports Facilities Near You</h1>
                <p class=" text-xs p-1">GOReserve allows you to easily find, book, and pay for sports facilities from
                    various GORs nearby. With our online payment system, you can conveniently secure your reservation
                    anytime, anywhere.</p>
            </a>
            <a href="#item2">
                <h1 class="text-lg font-bold p-1">Convenient Online Booking</h1>
                <p class=" text-xs p-1">With GOReserve, you can enjoy the convenience of 24/7 online booking for your
                    favorite sports facilities. No more hassle of making phone calls or visiting the GOR in person.</p>
            </a>
            <a href="#item3">
                <h1 class="text-lg font-bold p-1">Secure Online Payments</h1>
                <p class=" text-xs p-1">We prioritize your safety and convenience. GOReserve offers secure online payment
                    options, ensuring that your transactions are protected and hassle-free.</p>
            </a>
        </div>
        <div class="inline-block w-full md:w-1/2 p-5 min-w-sm">
            <div class="carousel w-full">
                <div id="item1" class="carousel-item w-full">
                    <img src="{{ asset('/assets/images/feature (1).jpeg') }}" alt="Feature.img">
                </div>
                <div id="item2" class="carousel-item w-full">
                    <img src="{{ asset('/assets/images/feature (2).jpeg') }}" alt="Feature.img">
                </div>
                <div id="item3" class="carousel-item w-full">
                    <img src="{{ asset('/assets/images/feature (3).jpeg') }}" alt="Feature.img">
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5">
        <h1 class="text-center text-4xl font-bold m-5">Sports hall gallery</h1>
        <p class="text-center text-sm m-2">Explore popular sports hall near you</p>


        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div style="background-image: url('{{ asset('/assets/images/CTA.jpg') }}');"
            class="relative h-screen bg-no-repeat bg-cover bg-center bg-fixed">
            <div class="absolute w-full top-1/2 text-center m-auto">
                <h1 class="text-4xl font-bold p-1">Find and book sports hall</h1>
                <p class="p-1">Discover the nearest sports hall and start booking your favorite activities</p>
<<<<<<< HEAD
                <button class="btn btn-outline btn-primary">Search</button>
                <button class="btn btn-primary">learn more</button>
=======
                @auth
                <button class="btn btn-outline btn-primary">Search</button>
                <button class="btn btn-primary">learn more</button>
                @endauth
                @guest
                <a class="btn btn-outline btn-primary" href="{{ url('register') }}">Sign up</a>
                <a class="btn btn-primary" href="{{ url('login') }}">Login</a>
                @endguest

>>>>>>> 614215d2351f77bbeceae10946b351721a471381
            </div>
        </div>
    </section>
    <section>
        <p class="text-center text-sm m-2">Articles</p>
        <h1 class="text-center text-4xl font-bold m-5">Discover the Benefits of Sports</h1>
        <p class="text-center text-sm m-2">Stay active and healthy with sports</p>
        <div class="carousel rounded-box w-full overflow-x-auto">
            <div class="carousel-item p-5">
                <a href="/detailblog" class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Lorem, ipsum dolor.</h2>
                        <p class="text-sm text-base-300">by diva</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span>
                            <span class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span>
                            <span class="text-xs">Nov, 02 2023</span>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="carousel-item p-5">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Lorem, ipsum dolor.</h2>
                        <p class="text-sm text-base-300">by diva</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span class="text-xs">Nov, 02 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item p-5">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Lorem, ipsum dolor.</h2>
                        <p class="text-sm text-base-300">by diva</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span class="text-xs">Nov, 02 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item p-5">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Lorem, ipsum dolor.</h2>
                        <p class="text-sm text-base-300">by diva</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span class="text-xs">Nov, 02 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item p-5">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Lorem, ipsum dolor.</h2>
                        <p class="text-sm text-base-300">by diva</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span class="text-xs">Nov, 02 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item p-5">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Lorem, ipsum dolor.</h2>
                        <p class="text-sm text-base-300">by diva</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span class="text-xs">Nov, 02 2023</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item p-5">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Lorem, ipsum dolor.</h2>
                        <p class="text-sm text-base-300">by diva</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span class="text-xs">Nov, 02 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
