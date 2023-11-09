@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
        <!-- Page content-->
        <div class="container mt-4">
            <div class="row">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-3">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1" style="font-size: 31px">Mengupas Ruang Olahraga: Kesehatan dan Kesejahteraan yang Didapatkan</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on January 1, 2023 by Divaa</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Health</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Fit</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure><img src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" class="full-width-image" alt="Shoes" /></figure>
                        <!-- Post content-->
                        <section >
                                <div class="col-md-12">
                                        <div class="card-body">
                                            <p class="card-text">
                                            <p>Ruang olahraga sering kali menjadi elemen yang terlupakan dalam kehidupan sehari-hari kita yang sibuk. Namun, dalam blog ini, kita akan membongkar manfaat besar yang bisa didapatkan dari ruang olahraga, tidak hanya dari segi fisik, tetapi juga aspek kesejahteraan kita. Mari kita lihat bagaimana ruang olahraga dapat menjadi kunci untuk hidup yang lebih sehat dan bahagia.</p>
                                            <p>1. Fisik yang Sehat :</p>
                                              <li>Penjelasan tentang berolahraga secara teratur dapat meredakan stres dan meningkatkan mood.</li>
                                              <li>Manfaat olahraga dalam melepaskan endorfin yang membantu merasa lebih bahagia dan santai.</li>
                                            <p>2. Olahraga untuk Menjaga Kesehatan Tubuh:</p>
                                              <li>Penjelasan tentang peningkatan kekuatan, daya tahan, dan kesehatan jantung yang didapat dari berolahraga secara rutin.</li>
                                              <li>Mengurangi risiko penyakit jantung, obesitas, dan masalah kesehatan lainnya dengan menjadikan olahraga sebagai bagian dari gaya hidup.</li>
                                            <p>3. Kreativitas dan Produktivitas:</p>
                                              <li>Bagaimana berolahraga dapat meningkatkan kreativitas dan produktivitas sehari-hari.</li>
                                              <li>Cara olahraga membantu meningkatkan fokus dan kemampuan pemecahan masalah.</li>
                                            <p>4. Ruang Olahraga di Rumah: Investasi dalam Kesehatan Anda:</p>
                                              <li>Manfaat memiliki ruang olahraga pribadi di rumah, termasuk kenyamanan dan fleksibilitas dalam berolahraga.</li>
                                              <li>Bagaimana investasi ini berkontribusi pada perbaikan kesehatan dan kesejahteraan jangka panjang.</li>
                                            <p>5. Tips Memulai Ruang Olahraga Pribadi:</p>
                                              <li>Panduan praktis tentang bagaimana memulai ruang olahraga pribadi, termasuk pemilihan peralatan dan pengaturan jadwal.</li>
                                              <li>Ide-ide kreatif untuk menciptakan ruang olahraga yang sesuai dengan anggaran dan kebutuhan individu.</li>                    
                                            <p>
                                              <b>Kesimpulan</b>: 
                                              <br>Ruang Olahraga sebagai Kunci Menuju Hidup yang Lebih Sehat dan Bahagia:
                                              Merangkum pentingnya menjadikan olahraga sebagai bagian yang tak terpisahkan dari rutinitas harian.
                                              Bagaimana ruang olahraga adalah tempat di mana kita dapat menemukan keseimbangan dalam kehidupan yang sibuk, serta merayakan kesehatan kita.
                                            </p>
                                          </p>
                                        </div>
                                    </div>
                        </section>
                    </article>
                </div>
        </div>
        <!-- Footer-->
        <footer class="footer p-10 bg-neutral text-neutral-content">
            <aside>
        <img src="{{ asset('/assets/images/logo3.png') }}" class="w-32" alt="Logo.png">
        <p>GOReserve Ltd.<br/>Discover and book sports facilities with ease on GOReserve </p>
            </aside>
            <nav>
              <header class="footer-title">Services</header>
              <a class="link link-hover" href="/contact">Contact</a>
              <a class="link link-hover">Pricing</a>
              <a class="link link-hover">FaQ</a>
              <a class="link link-hover" href="/blog">Blog</a>
            </nav>
            <nav>
              <header class="footer-title">Company</header>
              <a class="link link-hover" href="/about">About Us</a>
              <a class="link link-hover">Testimonials</a>
              <a class="link link-hover">Partners</a>
              <a class="link link-hover">Careers</a>
            </nav>
            <nav>
              <header class="footer-title">Follow us</header>
              <a class="link link-hover"><i class="fa-brands fa-github"></i> Github</a>
              <a class="link link-hover"><i class="fa-brands fa-facebook"></i> Facebook</a>
              <a class="link link-hover"><i class="fa-brands fa-instagram"></i> Instagram</a>
              <a class="link link-hover"><i class="fa-brands fa-twitter"></i> Twitter</a>
              <a class="link link-hover"><i class="fa-brands fa-linkedin"></i> Linkedin</a>
              <a class="link link-hover"><i class="fa-brands fa-youtube"></i> Youtube</a>
            </nav>
        </footer>
        <footer class="footer footer-center p-4 bg-base-300 text-base-content">
            <aside>
              <p>Copyright © 2023 - All right reserved by GOReserve Ltd</p>
            </aside>
          </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
            <style>
              .full-width-image {
              width: 100%;
              max-width: 100%;
              height: auto;
              display: block;
              margin: 0 auto;
              }
          </style>  
@endsection