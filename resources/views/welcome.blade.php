<!DOCTYPE html>
<html lang="en">
<head>
    <title>KNN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{url('home/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('home/css/animate.css')}}">

    <link rel="stylesheet" href="{{url('home/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('home/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('home/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{url('home/css/aos.css')}}">

    <link rel="stylesheet" href="{{url('home/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{url('home/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('home/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{url('home/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('home/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{url('home/css/style.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">KNN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                {{--                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>--}}
                {{--                <li class="nav-item"><a href="domain.html" class="nav-link">Domain</a></li>--}}
                {{--                <li class="nav-item"><a class="nav-link" href="hosting.html">Hosting</a></li>--}}
                {{--                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>--}}
                {{--                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>--}}
                <li class="nav-item cta"><a href="{{route('knn')}}" class="nav-link"><span>Get started</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
            <img class="one-third js-fullheight align-self-end order-md-last img-fluid"
                 src="{{url('home/images/undraw_pair_programming_njlp.svg')}}" alt="">
            <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
                <div class="text mt-5">
                    <span class="subheading">Datamining A Kelompok 5</span>
                    <h1 class="mb-3"><span>Klasifikasi</span> <span>Penyakit</span>
                        <span>Kulit Menggunakan Metode KNN</span></h1>
                    {{--                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
                    <p><a href="{{route('knn')}}" class="btn btn-primary px-4 py-3">Get in touch</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Kenapa Memilih KNN</h2>
                <p>sebuah metode untuk melakukan klasifikasi terhadap objek berdasarkan data pembelajaran yang jaraknya
                    paling dekat dengan objek tersebut
                    . Untuk mengklasifikasikan obyek baru berdasarkan atribut dan sample-sample dari training data
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Faktor Penyebab Penyakit Kulit</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-lg-3 col-md-6 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <span class="price"><sup></sup> <span class="number">1<small class="per"></small></span>
		            <h3 class="heading-2 mb-3">kurangnya pengetahuan            masyarakat tentang kebersihan kulit</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <span class="price"><sup></sup> <span class="number">2<small class="per"></small></span>
		            <h3 class="heading-2 mb-3">Ketidakpedulian Terhadap          Lingkungan Sekitar</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <span class="price"><sup></sup> <span class="number">3<small class="per"></small></span>
		            <h3 class="heading-2 mb-3">Adanya Faktor Keturunan</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <span class="price"><sup></sup> <span class="number">4<small class="per"></small></span>
		            <h3 class="heading-2 mb-3">Bisa disebabkan oleh alergi makanan</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-5">
                <img src="images/undraw_podcast_q6p7.svg" class="img-fluid" alt="">
                <div class="heading-section ftco-animate mt-5">
                    <h2 class="mb-4">Penyakit Kulit Manusia</h2>
                    <p>Kulit merupakan organ tubuh pada manusia yang sangat penting karena terletak pada bagian luar
                        tubuh yang berfungsi untuk menerima rangsangan seperti sentuhan, rasa sakit dan pengaruh lainnya
                        dari luar (Nuraeni, 2016).
                    </p>
                </div>
            </div>
            <div class="col-lg-6 py-5">
                <div class="row">
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services border text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-cloud-computing"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">Urtikaria</h3>
                                <p>merupakan penyakit yang ditandai dengan adanya edema kulit superfisial setempat
                                    dengan ukuran yang bervariasi dikelilingi oleh halo eritem disertai rasa gatal atau
                                    panas dan terkadang perut terasa mulas serta demam
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services border text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-cloud"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">Pioderma</h3>
                                <p>merupakan penyakit infeksi bakterial kulit oleh bakteri staphylococcus aureus maupun
                                    streptococcus sp. Dengan ditandai gatal, terdapat benjolan merah pada kulit, dan
                                    kemudian menjadi nanah, kulit meradang, serta demam
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services border text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-server"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">Herpes</h3>
                                <p>merupakan penyakit radang kulit yang disebabkan oleh virus dengan ditandai munculnya
                                    bintik yang berisi cairan pada bagian kulit tertentu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Tahapan Metode KNN
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 align-items-center ftco-animate">

                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel"
                         aria-labelledby="v-pills-nextgen-tab">
                        <div class="d-md-flex">
                            <div class="one-forth align-self-center">
                                <img src="{{url('img/knn.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="one-half ml-md-5 align-self-center">
                                <p>
                                    Tahapan dalam algoritma ini yaitu pertama    tentukan nilai K yang akan dipakai dalam penelitian, selanjutnya hitung nilai Euclidean distance dengan rumus
                                </p>
                                <p>
                                    𝑑 (𝑥𝑖, 𝑦𝑖) = √∑ (𝑥𝑖 − 𝑦𝑖 𝑛 𝑖=0 ) 2
                                </p>
                                <p>
                                    dimana d(xi,yi) merupakan jarak euclidean, x merupakan data 1, y merupakan data 2, i merupakan fitur ke- dan n merupakan jumlah fitur. Setelah diketahui jarak euclidean distance maka selanjutnya urutkan data dari jarak yang terkecil lalu kelompokan data hasil uji dengan tetangga terdekat yang memiliki jarak terpendek.

                                </p>
                                <p><a href="{{route('knn')}}" class="btn btn-primary py-3">Get in touch</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                {{--                <span class="subheading">Customer Says</span>--}}
                <h2 class="mb-4">Our Team</h2>
                {{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>--}}
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap p-4 text-center">
                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="name">Akhmad Dani M</p>
                                <span class="position">162410101009</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 text-center">
                            <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="name">Tatiana Hedyta</p>
                                <span class="position">162410101014</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 text-center">
                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="name">Brian Rizqi P D</p>
                                <span class="position">162410101007</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="ftco-footer ftco-bg-dark ftco-section">
    {{--    <div class="container">--}}
    {{--        <div class="row mb-5">--}}
    {{--            <div class="col-md">--}}
    {{--                <div class="ftco-footer-widget mb-4 bg-primary p-4">--}}
    {{--                    <h2 class="ftco-heading-2">CoHost</h2>--}}
    {{--                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
    {{--                    <ul class="ftco-footer-social list-unstyled mb-0">--}}
    {{--                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>--}}
    {{--                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>--}}
    {{--                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md">--}}
    {{--                <div class="ftco-footer-widget mb-4 ml-md-5">--}}
    {{--                    <h2 class="ftco-heading-2">Unseful Links</h2>--}}
    {{--                    <ul class="list-unstyled">--}}
    {{--                        <li><a href="#" class="py-2 d-block">Servers</a></li>--}}
    {{--                        <li><a href="#" class="py-2 d-block">Windos Hosting</a></li>--}}
    {{--                        <li><a href="#" class="py-2 d-block">Cloud Hosting</a></li>--}}
    {{--                        <li><a href="#" class="py-2 d-block">OS Servers</a></li>--}}
    {{--                        <li><a href="#" class="py-2 d-block">Linux Servers</a></li>--}}
    {{--                        <li><a href="#" class="py-2 d-block">Policy</a></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md">--}}
    {{--                <div class="ftco-footer-widget mb-4">--}}
    {{--                    <h2 class="ftco-heading-2">Navigational</h2>--}}
    {{--                    <ul class="list-unstyled">--}}
    {{--                        <li><a href="#" class="py-2 d-block">Home</a></li>--}}
    {{--                        <li><a href="#" class="py-2 d-block">Domain</a></li>--}}
    {{--                        <li><a href="#" class="py-2 d-block">Hosting</a></li>--}}
    {{--                        <li><a href="#" class="py-2 d-block">About</a></li>--}}
    {{--                        <li><a href="#" class="py-2 d-block">Blog</a></li>--}}
    {{--                        <li><a href="#" class="py-2 d-block">Contact</a></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md">--}}
    {{--                <div class="ftco-footer-widget mb-4">--}}
    {{--                    <h2 class="ftco-heading-2">Office</h2>--}}
    {{--                    <div class="block-23 mb-3">--}}
    {{--                        <ul>--}}
    {{--                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>--}}
    {{--                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>--}}
    {{--                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-12 text-center">--}}

    {{--                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
    {{--                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
    {{--                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="{{url('home/js/jquery.min.js')}}"></script>
<script src="{{url('home/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{url('home/js/popper.min.js')}}"></script>
<script src="{{url('home/js/bootstrap.min.js')}}"></script>
<script src="{{url('home/js/jquery.easing.1.3.js')}}"></script>
<script src="{{url('home/js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('home/js/jquery.stellar.min.js')}}"></script>
<script src="{{url('home/js/owl.carousel.min.js')}}"></script>
<script src="{{url('home/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('home/js/aos.js')}}"></script>
<script src="{{url('home/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{url('home/js/bootstrap-datepicker.js')}}"></script>
<script src="{{url('home/js/jquery.timepicker.min.js')}}"></script>
<script src="{{url('home/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{url('home/js/google-map.js')}}"></script>
<script src="{{url('home/js/main.js')}}"></script>

</body>
</html>
