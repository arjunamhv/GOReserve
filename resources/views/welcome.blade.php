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
                        <a href="#section2" class="btn btn-primary">learn more</a>
                    @endauth
                    @guest
                        <a class="btn btn-outline btn-primary" href="{{ route('register') }}">Sign up</a>
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                    @endguest
                </div>
            </div>
        </div>
    </section>
    <section class="md:flex flex-row justify-between items-center flex-wrap my-5 px-12 lg:px-32" id="section2">
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
    <section class="md:flex flex-row justify-between items-center flex-wrap px-12 lg:px-32">
        <div class="inline-block w-full md:w-1/2 p-5 min-w-sm order-2 md:order-2">
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
        <div class="inline-block w-full md:w-1/2 p-5 pl-6 min-w-sm order-1 md:order-1">
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
    <section class="md:flex flex-row justify-between items-center flex-wrap px-12 lg:px-32">
        <div class="inline-block w-full md:w-1/2 p-5 min-w-sm">
            <img src="{{ asset('/assets/images/landing1.jpg') }}" alt="Landing.img">
        </div>
        <div class="inline-block w-full md:w-1/2 p-5 pl-6 min-w-sm">
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
    <section class="pb-5 px-12 lg:px-32">
        <h1 class="text-center text-4xl font-bold m-5">Sports hall gallery</h1>
        <p class="text-center text-sm m-2">Explore popular sports hall near you</p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('assets/images/gallery1.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                    src="{{ asset('assets/images/gallery2.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                    src="{{ asset('assets/images/gallery3.jpg') }}" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                    src="{{ asset('assets/images/gallery4.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                    src="{{ asset('assets/images/gallery5.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                    src="{{ asset('assets/images/gallery6.jpg') }}" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                    src="{{ asset('assets/images/gallery7.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                    src="{{ asset('assets/images/gallery8.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                    src="{{ asset('assets/images/gallery9.jpg') }}" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                    src="{{ asset('assets/images/gallery10.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                    src="{{ asset('assets/images/gallery11.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                    src="{{ asset('assets/images/gallery12.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 mt-10 px-12 lg:px-32">
        <p class="text-center text-sm m-2">Articles</p>
        <h1 class="text-center text-4xl font-bold m-5">Discover the Benefits of Sports</h1>
        <p class="text-center text-sm m-2">Stay active and healthy with sports</p>
        <div class="carousel rounded-box w-full overflow-x-auto">
            <div class="carousel-item p-5">
                <a href="/detailblog" class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://akcdn.detik.net.id/visual/2022/02/21/ilustrasi-pria-jogging_169.jpeg?w=650&q=90"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Mengupas Ruang Olahraga: Kesehatan dan Kesejahteraan yang Didapatkan</h2>
                        <p class="text-sm text-base-300">by Divaa</p>
                        <p>Ruang olahraga sering kali menjadi elemen yang terlupakan dalam kehidupan sehari-hari kita yang
                            sibuk...</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span>
                            <span class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span>
                            <span class="text-xs">Jan, 01 2023</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item p-5">
                <a href="/detailblog" class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://awsimages.detik.net.id/community/media/visual/2019/09/18/b331ecec-24af-4d21-b979-144bbc7f032b_169.jpeg?w=700&q=90"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Olahraga 10 Menit Bisa Selamatkan Jiwa dan Buat Umur Lebih Panjang</h2>
                        <p class="text-sm text-base-300">by Divaa</p>
                        <p>Hasil penelitian terbaru menemukan fakta yang menakjubkan jika kita lebih rutin berolahraga...</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span
                                class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span
                                class="text-xs">Nov, 22 2021</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item p-5">
                <a href="/detailblog" class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://cdn1-production-images-kly.akamaized.net/kgkX4K8PyXEaiZO7YV9peHqfTIM=/1280x720/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3181233/original/032396100_1594872164-crop-young-sportswoman-tying-shoelaces-on-sneakers-4498555.jpg"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Mudah, 13 Contoh Olahraga Ringan Cocok untuk Di Rumah!</h2>
                        <p class="text-sm text-base-300">by Divaa</p>
                        <p>Olahraga ringan merupakan sebuah latihan yang memerlukan lebih sedikit tenaga.Jika dibandingkan dengan latihan level berat...</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span
                                class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span
                                class="text-xs">Des, 16 2021</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item p-5">
                <a href="/detailblog" class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://awsimages.detik.net.id/community/media/visual/2019/09/18/b331ecec-24af-4d21-b979-144bbc7f032b_169.jpeg?w=700&q=90"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Olahraga 10 Menit Bisa Selamatkan Jiwa dan Buat Umur Lebih Panjang</h2>
                        <p class="text-sm text-base-300">by Divaa</p>
                        <p>Hasil penelitian terbaru menemukan fakta yang menakjubkan jika kita lebih rutin berolahraga...</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span
                                class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span
                                class="text-xs">Nov, 22 2021</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item p-5">
                <a href="/detailblog" class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://awsimages.detik.net.id/community/media/visual/2019/09/18/b331ecec-24af-4d21-b979-144bbc7f032b_169.jpeg?w=700&q=90"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Olahraga 10 Menit Bisa Selamatkan Jiwa dan Buat Umur Lebih Panjang</h2>
                        <p class="text-sm text-base-300">by Divaa</p>
                        <p>Hasil penelitian terbaru menemukan fakta yang menakjubkan jika kita lebih rutin berolahraga...</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span
                                class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span
                                class="text-xs">Nov, 22 2021</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item p-5">
                <a href="/detailblog" class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://awsimages.detik.net.id/community/media/visual/2019/09/18/b331ecec-24af-4d21-b979-144bbc7f032b_169.jpeg?w=700&q=90"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Olahraga 10 Menit Bisa Selamatkan Jiwa dan Buat Umur Lebih Panjang</h2>
                        <p class="text-sm text-base-300">by Divaa</p>
                        <p>Hasil penelitian terbaru menemukan fakta yang menakjubkan jika kita lebih rutin berolahraga...</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span
                                class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span
                                class="text-xs">Nov, 22 2021</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item p-5">
                <a href="/detailblog" class="card w-96 bg-base-100 shadow-xl">
                    <figure><img src="https://awsimages.detik.net.id/community/media/visual/2019/09/18/b331ecec-24af-4d21-b979-144bbc7f032b_169.jpeg?w=700&q=90"
                            alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Olahraga 10 Menit Bisa Selamatkan Jiwa dan Buat Umur Lebih Panjang</h2>
                        <p class="text-sm text-base-300">by Divaa</p>
                        <p>Hasil penelitian terbaru menemukan fakta yang menakjubkan jika kita lebih rutin berolahraga...</p>
                        <div class="flex justify-between">
                            <span class="text-xs"><i class="fa-regular fa-clock"></i> 3 minutes ago </span><span
                                class="text-xs"><i class="fa-regular fa-eye"></i> 3000 views</span><span
                                class="text-xs">Nov, 22 2021</span>
                        </div>
                    </div>
                </a>
            </div>
    </section>
@endsection
