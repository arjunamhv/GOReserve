@extends('layouts.app')

@section('content')
    <section>
        <div style="background-image: url('{{ asset('/assets/images/CTA.jpg') }}');"
            class="relative h-screen bg-no-repeat bg-cover bg-center bg-fixed">
            <div class="absolute inset-0 bg-black bg-opacity-20">
                <div class="absolute w-full top-1/3 text-center m-auto">
                    <h1 class="text-4xl font-bold p-1 text-white">Find and book sports hall</h1>
                    <p class="p-1 text-white">Discover the nearest sports hall and start booking your favorite activities</p>
                    @auth
                        <a href="{{ url('sporthall') }}" class="btn btn-outline btn-primary">Search</a>
                        <a href="#featureSection" class="btn btn-primary">learn more</a>
                    @endauth
                    @guest
                        <a class="btn btn-outline btn-primary" href="{{ route('register') }}">Sign up</a>
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                    @endguest
                </div>
            </div>
        </div>
    </section>
    <section id="featureSection" class="md:flex flex-row justify-between items-center flex-wrap my-5">
        <div id="featureSectionImg" class="opacity-0 inline-block w-full md:w-1/2 p-5 min-w-sm">
            <img src="{{ asset('/assets/images/landing2.jpg') }}" alt="Landing.img">
        </div>
        <div id="featureSectionText" class="opacity-0 inline-block w-full md:w-1/2 p-5 pl-6 min-w-sm">
            <h1 class="text-4xl font-bold p-1">Discover and book sports facilities with ease on GOReserve platform.</h1>
            <p class="p-1">Find, book, and pay for sports facilities nearby in just a few simple steps.</p>
            <li class="p-1">Search for available sports facilities in your area.</li>
            <li class="p-1">Securely book your preferred sports facility online.</li>
            <li class="p-1">Conveniently pay for your sports facility reservation.</li>
        </div>
    </section>
    <section id="featuresListSection" class="md:flex flex-row justify-between items-center flex-wrap">
        <div id="featuresListSectionImg" class="opacity-0 inline-block w-full md:w-1/2 p-5 min-w-sm order-2 md:order-2">
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
        <div id="featuresListSectionText"
            class="opacity-0 inline-block w-full md:w-1/2 p-5 pl-6 min-w-sm order-1 md:order-1">
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
    </section>
    <section id="ctaSection" class="md:flex flex-row justify-between items-center flex-wrap">
        <div id="ctaSectionImg" class="opacity-0 inline-block w-full md:w-1/2 p-5 min-w-sm">
            <img src="{{ asset('/assets/images/landing1.jpg') }}" alt="Landing.img">
        </div>
        <div id="ctaSectionText" class="opacity-0 inline-block w-full md:w-1/2 p-5 pl-6 min-w-sm">
            <h1 class="text-4xl font-bold p-1">Start finding and book sports facilities near you</h1>
            <p class="p-1">GOReserve is the easiest way to find and book sports facilities. With our platform, you can
                quickly search for available sports halls and make hassle-free reservations.</p>
            @auth
                <a href="{{ url('sporthall') }}" class="btn btn-primary">Search GOR</a>
                <button class="btn btn-outline btn-primary">Learn More</button>
            @endauth
            @guest
                <a class="btn btn-primary" href="{{ route('register') }}">Sign up</a>
                <a class="btn btn-outline btn-primary" href="{{ route('login') }}">Login</a>
            @endguest
        </div>
    </section>
    <section id="gallerySection" class="pb-5">
        <div id="galleryHead" class="opacity-0 mb-1">
            <h1 class="text-center text-4xl font-bold m-5">Sports hall gallery</h1>
            <p class="text-center text-sm m-2">Explore popular sports hall near you</p>
        </div>
        <div class="h-screen grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div class="row-span-1 group h-full w-full [perspective:1000px]">
                    <div class="flip-card relative h-full w-full rounded-xl shadow-xl transition-all duration-500 animate-delay-0 [transform-style:preserve-3d]">
                        <div class="absolute inset-0">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl px-12 text-center [transform:rotateY(180deg)] [backface-visibility:hidden] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/gallery1.jpg') }}');">
                        </div>
                    </div>
                </div>
                <div class="row-span-3 group h-full w-full [perspective:1000px]">
                    <div class="flip-card relative h-full w-full rounded-xl shadow-xl transition-all duration-500 animate-delay-500 [transform-style:preserve-3d]">
                        <div class="absolute inset-0">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl px-12 text-center [transform:rotateY(180deg)] [backface-visibility:hidden] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/gallery2.jpg') }}');">
                        </div>
                    </div>
                </div>
                <div class="row-span-1 group h-full w-full [perspective:1000px]">
                    <div class="flip-card relative h-full w-full rounded-xl shadow-xl transition-all duration-500 animate-delay-1000 [transform-style:preserve-3d]">
                        <div class="absolute inset-0">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl px-12 text-center [transform:rotateY(180deg)] [backface-visibility:hidden] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/gallery3.jpg') }}');">
                        </div>
                    </div>
                </div>  
            </div>
            <div class="grid gap-4">
                <div class="row-span-2 group h-full w-full [perspective:1000px]">
                    <div class="flip-card relative h-full w-full rounded-xl shadow-xl transition-all duration-500 animate-delay-[1500ms] [transform-style:preserve-3d]">
                        <div class="absolute inset-0">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl px-12 text-center [transform:rotateY(180deg)] [backface-visibility:hidden] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/gallery4.jpg') }}');">
                        </div>
                    </div>
                </div>
                <div class="row-span-1 group h-full w-full [perspective:1000px]">
                    <div class="flip-card relative h-full w-full rounded-xl shadow-xl transition-all duration-500 animate-delay-[2000ms] [transform-style:preserve-3d]">
                        <div class="absolute inset-0">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl px-12 text-center [transform:rotateY(180deg)] [backface-visibility:hidden] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/gallery5.jpg') }}');">
                        </div>
                    </div>
                </div>
                <div class="row-span-2 group h-full w-full [perspective:1000px]">
                    <div class="flip-card relative h-full w-full rounded-xl shadow-xl transition-all duration-500 animate-delay-[2500ms] [transform-style:preserve-3d]">
                        <div class="absolute inset-0">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl px-12 text-center [transform:rotateY(180deg)] [backface-visibility:hidden] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/gallery6.jpg') }}');">
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-4">
                <div class="row-span-1 group h-full w-full [perspective:1000px]">
                    <div class="flip-card relative h-full w-full rounded-xl shadow-xl transition-all duration-500 animate-delay-[3000ms] [transform-style:preserve-3d]">
                        <div class="absolute inset-0">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl px-12 text-center [transform:rotateY(180deg)] [backface-visibility:hidden] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/gallery7.jpg') }}');">
                        </div>
                    </div>
                </div>
                <div class="row-span-3 group h-full w-full [perspective:1000px]">
                    <div class="flip-card relative h-full w-full rounded-xl shadow-xl transition-all duration-500 animate-delay-[3500ms] [transform-style:preserve-3d]">
                        <div class="absolute inset-0">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl px-12 text-center [transform:rotateY(180deg)] [backface-visibility:hidden] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/gallery8.jpg') }}');">
                        </div>
                    </div>
                </div>
                <div class="row-span-1 group h-full w-full [perspective:1000px]">
                    <div class="flip-card relative h-full w-full rounded-xl shadow-xl transition-all duration-500 animate-delay-[4000ms] [transform-style:preserve-3d]">
                        <div class="absolute inset-0">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl px-12 text-center [transform:rotateY(180deg)] [backface-visibility:hidden] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/gallery9.jpg') }}');">
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-4">
                <div class="row-span-2 group h-full w-full [perspective:1000px]">
                    <div class="flip-card relative h-full w-full rounded-xl shadow-xl transition-all duration-500 animate-delay-[4500ms] [transform-style:preserve-3d]">
                        <div class="absolute inset-0">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl px-12 text-center [transform:rotateY(180deg)] [backface-visibility:hidden] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/gallery10.jpg') }}');">
                        </div>
                    </div>
                </div>
                <div class="row-span-1 group h-full w-full [perspective:1000px]">
                    <div class="flip-card relative h-full w-full rounded-xl shadow-xl transition-all duration-500 animate-delay-[5000ms] [transform-style:preserve-3d]">
                        <div class="absolute inset-0">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl px-12 text-center [transform:rotateY(180deg)] [backface-visibility:hidden] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/gallery11.jpg') }}');">
                        </div>
                    </div>
                </div>
                <div class="row-span-2 group h-full w-full [perspective:1000px]">
                    <div class="flip-card relative h-full w-full rounded-xl shadow-xl transition-all duration-500 animate-delay-[5500ms] [transform-style:preserve-3d]">
                        <div class="absolute inset-0">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl px-12 text-center [transform:rotateY(180deg)] [backface-visibility:hidden] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/gallery12.jpg') }}');">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blogSection" class="my-5 mt-10">
        <div id="blogHead" class="opacity-0">
            <p class="text-center text-sm m-2">Articles</p>
            <h1 class="text-center text-4xl font-bold m-5">Discover the Benefits of Sports</h1>
            <p class="text-center text-sm m-2">Stay active and healthy with sports</p>
        </div>
        <div class="carousel rounded-box w-full overflow-x-auto">
            <div class="carousel-item p-5">
                <a href="/detailblog" class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Mengupas Ruang Olahraga: Kesehatan dan Kesejahteraan yang Didapatkan</h2>
                        <p class="text-sm text-base-300">by Divaa</p>
                        <p>Ruang olahraga sering kali menjadi elemen yang terlupakan dalam kehidupan sehari-hari kita yang
                            sibuk. Namun, dalam blog ini, kita akan membongkar manfaat besar yang bisa didapatkan dari ruang
                            olahraga...</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span>
                            <span class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span>
                            <span class="text-xs">Jan, 01 2023</span>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic
                            dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem
                            soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span
                                class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span
                                class="text-xs">Nov, 02 2023</span>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic
                            dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem
                            soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span
                                class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span
                                class="text-xs">Nov, 02 2023</span>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic
                            dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem
                            soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span
                                class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span
                                class="text-xs">Nov, 02 2023</span>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic
                            dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem
                            soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span
                                class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span
                                class="text-xs">Nov, 02 2023</span>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic
                            dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem
                            soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span
                                class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span
                                class="text-xs">Nov, 02 2023</span>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et amet. Aspernatur hic
                            dignissimos, dolorem debitis accusamus modi vel quod ratione quibusdam culpa exercitationem
                            soluta!</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span
                                class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span
                                class="text-xs">Nov, 02 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('featureSection').addEventListener('mouseenter', function() {
            document.getElementById('featureSectionImg').style.opacity = '1';
            document.getElementById('featureSectionText').style.opacity = '1';
            if (innerWidth > 768) {
                document.getElementById('featureSectionImg').classList.add('animate-fade-right',
                    'animate-duration-1000', 'animate-delay-0');
                document.getElementById('featureSectionText').classList.add('animate-fade-left',
                    'animate-duration-1000', 'animate-delay-0');
            } else {
                document.getElementById('featureSectionImg').classList.add('animate-fade-down',
                    'animate-duration-1000', 'animate-delay-0');
                document.getElementById('featureSectionText').classList.add('animate-fade-down',
                    'animate-duration-1000', 'animate-delay-0');
            }
        });
        document.getElementById('featuresListSection').addEventListener('mouseenter', function() {
            document.getElementById('featuresListSectionImg').style.opacity = '1';
            document.getElementById('featuresListSectionText').style.opacity = '1';
            if (innerWidth > 768) {
                document.getElementById('featuresListSectionImg').classList.add('animate-fade-left',
                    'animate-duration-1000', 'animate-delay-0');
                document.getElementById('featuresListSectionText').classList.add('animate-fade-right',
                    'animate-duration-1000', 'animate-delay-0');
            } else {
                document.getElementById('featuresListSectionImg').classList.add('animate-fade-down',
                    'animate-duration-1000', 'animate-delay-0');
                document.getElementById('featuresListSectionText').classList.add('animate-fade-down',
                    'animate-duration-1000', 'animate-delay-0');
            }
        });
        document.getElementById('ctaSection').addEventListener('mouseenter', function() {
            document.getElementById('ctaSectionImg').style.opacity = '1';
            document.getElementById('ctaSectionText').style.opacity = '1';
            if (innerWidth > 768) {
                document.getElementById('ctaSectionImg').classList.add('animate-fade-right',
                    'animate-duration-1000', 'animate-delay-0');
                document.getElementById('ctaSectionText').classList.add('animate-fade-left',
                    'animate-duration-1000', 'animate-delay-0');
            } else {
                document.getElementById('ctaSectionImg').classList.add('animate-fade-down', 'animate-duration-1000',
                    'animate-delay-0');
                document.getElementById('ctaSectionText').classList.add('animate-fade-down',
                    'animate-duration-1000', 'animate-delay-0');
            }
        });
        document.getElementById('gallerySection').addEventListener('mouseenter', function() {
            document.getElementById('galleryHead').style.opacity = '1';
            document.getElementById('galleryHead').classList.add('animate-fade-down', 'animate-duration-1000',
                    'animate-delay-0');
            var groupElements = this.querySelectorAll('.flip-card');
            groupElements.forEach(function(groupElement) {
                groupElement.classList.add('[transform:rotateY(180deg)]');
            });
        });
        document.getElementById('blogSection').addEventListener('mouseenter', function() {
            document.getElementById('blogHead').style.opacity = '1';
            document.getElementById('blogHead').classList.add('animate-fade-down', 'animate-duration-1000',
                    'animate-delay-0');
        });
    </script>
@endsection
