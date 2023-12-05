@extends('layouts.app')

@section('content')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .font-family{
            font-family: 'poppins' ;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla">
    <section class="px-12 lg:px-32 py-16">

            <div class="flex items-center text-lg no-underline text-white pr-6">
                <a class="" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
              <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
              <h2
                class="font-bold text-dark text-2xl mb-4 sm:text-3xl lg:text-4xl tracking-widest"
              >
                OUR BLOG
              </h2>
            </div>
          </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Sports</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Health</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Physical</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Fitness</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Activity</a>
            </div>
        </div>
    </nav>


    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a class="hover:opacity-75">
                    <img src="https://akcdn.detik.net.id/visual/2022/02/21/ilustrasi-pria-jogging_169.jpeg?w=650&q=90">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a class="text-blue-700 text-sm font-bold uppercase pb-4">Sport</a>
                    <a class="text-3xl font-bold hover:text-gray-700 pb-4">Mengupas Ruang Olahraga: Kesehatan dan Kesejahteraan yang Didapatkan</a>
                    <p href="#" class="text-sm pb-3">
                        By <a class="font-semibold hover:text-gray-800">Divaa</a>, Published on January 1th, 2023
                    </p>
                    <a class="pb-6">Ruang olahraga sering kali menjadi elemen yang terlupakan dalam kehidupan sehari-hari kita yang sibuk..</a>
                    <a href="/detailblog" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                </div>
            </article>

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="https://awsimages.detik.net.id/community/media/visual/2019/09/18/b331ecec-24af-4d21-b979-144bbc7f032b_169.jpeg?w=700&q=90">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a class="text-blue-700 text-sm font-bold uppercase pb-4">Health</a>
                    <a class="text-3xl font-bold hover:text-gray-700 pb-4">Olahraga 10 Menit Bisa Selamatkan Jiwa dan Buat Umur Lebih Panjang</a>
                    <p href="#" class="text-sm pb-3">
                        By <a class="font-semibold hover:text-gray-800">Divaa</a>, Published on Nov 22th, 2021
                    </p>
                    <a class="pb-6">Hasil penelitian terbaru menemukan fakta yang menakjubkan jika kita lebih rutin berolahraga..</a>
                    <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                </div>
            </article>

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a class="hover:opacity-75">
                    <img src="https://cdn1-production-images-kly.akamaized.net/kgkX4K8PyXEaiZO7YV9peHqfTIM=/1280x720/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3181233/original/032396100_1594872164-crop-young-sportswoman-tying-shoelaces-on-sneakers-4498555.jpg">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a class="text-blue-700 text-sm font-bold uppercase pb-4">Sports</a>
                    <a class="text-3xl font-bold hover:text-gray-700 pb-4">Mudah, 13 Contoh Olahraga Ringan Cocok untuk Di Rumah!</a>
                    <p href="#" class="text-sm pb-3">
                        By <a class="font-semibold hover:text-gray-800">Divaa</a>, Published on Des 16nd, 2021
                    </p>
                    <a class="pb-6">Olahraga ringan merupakan sebuah latihan yang memerlukan lebih sedikit tenaga.Jika dibandingkan dengan latihan level berat...</a>
                    <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                </div>
            </article>

            <!-- Pagination -->
            <div class="flex items-center py-8">
                <a href="#" class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next <i class="fas fa-arrow-right ml-2"></i></a>
            </div>

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Side Widget</p>
                <p class="pb-2">Sport is a physical activity carried out regularly with the aim of maintaining or improving body health and fitness. Sports include various types of activities, such as running, swimming, soccer, badminton, and many more.</p>
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Instagram</p>
                <div class="grid grid-cols-3 gap-3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
                </div>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                    <i class="fab fa-instagram mr-2"></i> Follow @GoReserve
                </a>
            </div>
        </aside>
    </div>
</section>
    <script>
        function getCarouselData() {
            return {
                currentIndex: 0,
                images: [
                    'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=9',
                ],
                increment() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                },
                decrement() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                },
            }
        }
    </script>

</body>
</html>
@endsection