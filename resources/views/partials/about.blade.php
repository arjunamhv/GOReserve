@extends('layouts.app')

<<<<<<< HEAD
@section('container')
<section class="px-32 py-16">
    <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
          <h2
            class="font-bold text-dark text-2xl mb-4 sm:text-3xl lg:text-4xl dark:text-white tracking-widest"
          >
            ABOUT US
          </h2>
        </div>
      </div>
=======
@section('content')
>>>>>>> 2417658c9e58206153a36ca9e6bd31760a98f722
    <div class="container">
        <!-- About Us -->
        <div class="col-md-12" style="margin-bottom: 3em">
            <div class="col-md-10 p-4 rounded-3 mb-3 mx-auto bg-light fade-in">
                <h3 class="text-dark fw-bold">About Us</h3>
                <div class="col-md-11 ms-auto">
                    We provide a sports hall rental platform that allows individuals, groups and organizations to easily
                    search, compare and book sports facilities that suit their needs. We provide complete information
                    about various types of sports halls, including courts, swimming pools, gyms, fitness studios and
                    much more. We strive to simplify the rental process so you can quickly find and book the sports hall
                    you need
                </div>
            </div>
            <div class="col-md-11 p-4 rounded-3 mx-auto about-background mb-3 fade-in">
                <h4 class="text-dark fw-bold">Vission</h4>
                <div class="col-md-11 text-start">
                    To become the leading sports hall rental platform that encourages people to live healthy and active
                    lives by providing easy access, accurate information and superior service.
                </div>
            </div>
            <div class="col-md-11 p-4 rounded-3 mx-auto about-background fade-in">
                <h4 class="text-dark fw-bold">Mission</h4>
                <div class="col-md-11 text-start">
                    Our mission is to provide easy access to quality sports facilities, facilitate community health and
                    well-being, and provide transparent information and superior service. We aim to support positive
                    changes in people's lifestyles, provide accurate information, improve service quality, innovate
                    continuously, and provide excellent customer support. We are committed to being a partner in the
                    journey towards healthy and active living for all individuals and groups.
                </div>
            </div>
        </div>
        <!-- Benefit -->
        <div class="col-md-12 pt-5 benefit-container">
            <div class="col-md-11 p-4 benefit-background rounded-3 mb-4 fade-in">
                <h4 class="text-dark fw-bold mx-auto text-center">
                    Kemitraan dengan Pemilik Gedung Olahraga
                </h4>
                <div class="col-md-11 text-start ms-auto">
                    GoReserve memiliki fokus yang kuat pada membangun dan menjaga kemitraan yang kuat dengan pemilik
                    gedung olahraga. Kami mengakui bahwa tanpa kemitraan yang baik dengan penyedia fasilitas olahraga,
                    platform kami tidak akan dapat berfungsi secara efektif. Kami bekerja sama dengan pemilik gedung
                    olahraga untuk memastikan bahwa fasilitas yang mereka tawarkan di platform kami memenuhi standar
                    kualitas yang tinggi. Kami berusaha untuk menciptakan hubungan saling menguntungkan di mana pemilik
                    gedung olahraga dapat meningkatkan pemanfaatan fasilitas mereka, sementara pengguna kami dapat
                    dengan mudah menemukan dan memesan tempat olahraga yang mereka butuhkan.
                </div>
            </div>
            <div class="col-md-11 p-4 benefit-background rounded-3 ms-auto mb-4 fade-in">
                <h4 class="text-dark fw-bold mx-auto text-center">
                    Komitmen terhadap Kepuasan Pelanggan
                </h4>
                <div class="col-md-11 text-start ms-auto">
                    Kepuasan pelanggan adalah salah satu prioritas utama kami. Kami berupaya untuk memberikan pengalaman
                    pengguna yang luar biasa kepada mereka yang menggunakan platform GoReserve. Ini mencakup memberikan
                    dukungan pelanggan yang responsif, memastikan transparansi dalam informasi yang kami berikan, serta
                    memproses transaksi dengan cepat dan aman. Kami mendengarkan umpan balik pelanggan kami dan
                    menggunakan wawasan ini untuk terus memperbaiki layanan kami. Dengan komitmen terhadap kepuasan
                    pelanggan, kami bertujuan untuk menjadikan pengalaman penyewaan fasilitas olahraga melalui GoReserve
                    sebagai pengalaman yang mulus dan memuaskan.
                </div>
            </div>
            <div class="col-md-11 p-4 benefit-background rounded-3 fade-in">
                <h4 class="text-dark fw-bold mx-auto text-center">
                    Dedikasi untuk Meningkatkan Akses Fasilitas Olahraga
                </h4>
                <div class="col-md-11 text-start ms-auto">
                    Salah satu tujuan utama kami adalah meningkatkan akses masyarakat ke fasilitas olahraga. Kami
                    percaya bahwa olahraga dan aktivitas fisik adalah kunci untuk hidup sehat dan aktif. Melalui
                    platform GoReserve, kami berupaya untuk membuat fasilitas olahraga yang berkualitas lebih mudah
                    diakses oleh individu dan kelompok. Ini dapat membantu masyarakat untuk berpartisipasi dalam
                    berbagai kegiatan olahraga, menjalani gaya hidup sehat, dan mencapai kesejahteraan fisik dan mental
                    yang lebih baik. Dedikasi kami untuk meningkatkan akses fasilitas olahraga adalah inti dari misi
                    kami untuk memberdayakan masyarakat dalam mencapai hidup yang lebih sehat dan aktif.
                </div>
            </div>
        </div>
        <!-- Team Section -->
        <div class="col-md-12 pb-5 fade-in">
            <h3 class="fw-bold">Team Section</h3>
            <div class="col-md-12 d-flex flex-wrap justify-content-around">
                <div class="row col-md-3 me-3 mb-2 p-3 rounded-3 shadow-sm bg-light">
                    <div class="col-md-3 d-flex align-items-center p-0">
                        <img src="avatar.png" class="img-fluid rounded-circle" alt="" />
                    </div>
                    <div class="col-md-9 d-flex align-items-center p-0">
                        <div class="card-body">
                            <h5 class="card-title m-0 fw-bold card-name">Arjuna Mahadeva</h5>
                            <p class="card-text m-0 fw-bold">Ketua</p>
                        </div>
                    </div>
                </div>
                <div class="row col-md-3 me-3 mb-2 p-3 rounded-3 shadow-sm bg-light">
                    <div class="col-md-3 d-flex align-items-center p-0">
                        <img src="avatar.png" class="img-fluid rounded-circle" alt="" />
                    </div>
                    <div class="col-md-9 d-flex align-items-center p-0">
                        <div class="card-body">
                            <h5 class="card-title m-0 fw-bold card-name">Diva Alistya Putri</h5>
                            <p class="card-text m-0 fw-bold">Anggota</p>
                        </div>
                    </div>
                </div>
                <div class="row col-md-3 me-3 mb-2 p-3 rounded-3 shadow-sm bg-light">
                    <div class="col-md-3 d-flex align-items-center p-0">
                        <img src="avatar.png" class="img-fluid rounded-circle" alt="" />
                    </div>
                    <div class="col-md-9 d-flex align-items-center p-0">
                        <div class="card-body">
                            <h5 class="card-title m-0 fw-bold card-name">Amalia Chrissafa Zalzabila</h5>
                            <p class="card-text m-0 fw-bold">Anggota</p>
                        </div>
                    </div>
                </div>
                <div class="row col-md-3 me-3 mb-2 p-3 rounded-3 shadow-sm bg-light">
                    <div class="col-md-3 d-flex align-items-center p-0">
                        <img src="avatar.png" class="img-fluid rounded-circle" alt="" />
                    </div>
                    <div class="col-md-9 d-flex align-items-center p-0">
                        <div class="card-body">
                            <h5 class="card-title m-0 fw-bold card-name">Muhammad Alam Basalamah</h5>
                            <p class="card-text m-0 fw-bold">Anggota</p>
                        </div>
                    </div>
                </div>
                <div class="row col-md-3 me-3 mb-2 p-3 rounded-3 shadow-sm bg-light">
                    <div class="col-md-3 d-flex align-items-center p-0">
                        <img src="avatar.png" class="img-fluid rounded-circle" alt="" />
                    </div>
                    <div class="col-md-9 d-flex align-items-center p-0">
                        <div class="card-body">
                            <h5 class="card-title m-0 fw-bold card-name">Agung Ari Gunayasa</h5>
                            <p class="card-text m-0 fw-bold">Anggota</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials -->
        <div class="col-md-12 fade-in" style="margin-bottom: 5em;">
            <h3 class="fw-bold">Testimonials</h3>
            <div class="row col-md-12 me-3 mb-5 p-3 testimoni-background">
                <div class="col-md-1 d-flex align-items-center p-0">
                    <img src="{{ asset('img/avatar.png') }}" class="img-fluid rounded-circle" alt="" />
                </div>
                <div class="col-md-9 d-flex align-items-center p-0">
                    <div class="card-body">
                        <p class="card-title m-0">GoReserve has been my savior in scheduling practices and games. I
                            travel a lot and have to look for sports venues with the best facilities.</p>
                        <div class="col-md-8 d-flex mt-2 justify-content-between align-items-center">
                            <h5 class="card-text m-0 fw-bold">Amalia Chrissafa Zalzabila</h5>
                            <div class="ms-4 rating text-warning">
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                            </div>
                            <p class="ms-3 text-dark">Dec 10, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 d-flex align-items-top justify-content-end">
                    <i class="fa-solid fa-quote-left fa-6x"></i>
                </div>
            </div>
            <div class="row col-md-12 me-3 mb-5 p-3 testimoni-background">
                <div class="col-md-1 d-flex align-items-center p-0">
                    <img src="{{ asset('img/avatar.png') }}" class="img-fluid rounded-circle" alt="" />
                </div>
                <div class="col-md-9 d-flex align-items-center p-0">
                    <div class="card-body">
                        <p class="card-title m-0">GoReserve has been my savior in scheduling practices and games. I
                            travel a lot and have to look for sports venues with the best facilities.</p>
                        <div class="col-md-8 d-flex mt-2 justify-content-between align-items-center">
                            <h5 class="card-text m-0 fw-bold">Amalia Chrissafa Zalzabila</h5>
                            <div class="ms-4 rating text-warning">
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                            </div>
                            <p class="ms-3 text-dark">Dec 10, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 d-flex align-items-top justify-content-end">
                    <i class="fa-solid fa-quote-left fa-6x"></i>
                </div>
            </div>
            <div class="row col-md-12 me-3 mb-5 p-3 testimoni-background">
                <div class="col-md-1 d-flex align-items-center p-0">
                    <img src="{{ asset('img/avatar.png') }}" class="img-fluid rounded-circle" alt="" />
                </div>
                <div class="col-md-9 d-flex align-items-center p-0">
                    <div class="card-body">
                        <p class="card-title m-0">GoReserve has been my savior in scheduling practices and games. I
                            travel a lot and have to look for sports venues with the best facilities.</p>
                        <div class="col-md-8 d-flex mt-2 justify-content-between align-items-center">
                            <h5 class="card-text m-0 fw-bold">Amalia Chrissafa Zalzabila</h5>
                            <div class="ms-4 rating text-warning">
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                                <i class="fas fa-star fa-sm"></i>
                            </div>
                            <p class="ms-3 text-dark">Dec 10, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 d-flex align-items-top justify-content-end">
                    <i class="fa-solid fa-quote-left fa-6x"></i>
                </div>
            </div>
        </div>
</section>
@endsection
