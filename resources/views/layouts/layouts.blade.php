<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <title>Pondok Pesantren Manarul Quran</title>
        <link rel="shortcut icon" href="{{ asset('assets/icons/favicon.ico') }}"> {{-- Icon Website --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> {{-- Integrasi dengan Bootstrap's --}}
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        {{-- summernote css --}}
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <meta name="viewport"content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover, user-scalable=no">
    </head>

    <body>

        {{-- Navbar --}}
        @include('layouts.navbar')
        {{-- Navbar --}}

        {{-- Content --}}
        @yield('content')
        {{-- Content --}}

        {{-- Footer --}}
        <section id="footer" class="bg-white">
            <div class="container py-4">
                <footer>
                    <div class="row">
                        {{-- Kolom 1 Navigasi --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Navigasi</h5>
                            <div class="d-flex">
                                <ul class="nav flex-column me-5">
                                    <li class="nav-item mb-2">
                                        <a class="nav-link p-0 text-muted" href="#">Berita Sekolah</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link p-0 text-muted" href="#">Kegiatan Sekolah</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link p-0 text-muted" href="#">Prestasi</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link p-0 text-muted" href="#">Berita</a>
                                    </li>
                                </ul>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2">
                                        <a class="nav-link p-0 text-muted" href="#">Alumni</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link p-0 text-muted" href="#">Info PSB</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link p-0 text-muted" href="#">Prestasi</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link p-0 text-muted" href="#">Video Kegiatan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- Kolom 2 Media Berita --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Ikuti Kami</h5>
                            <div class="d-flex mb-3">
                                <a href="#" target="_blank" class="text-decoration-none text-dark">
                                    <img class="me-4" src="{{ asset('assets/icons/icons8-facebook.svg') }}" alt="" height="30" width="30">
                                </a>
                                <a href="#" target="_blank" class="text-decoration-none text-dark">
                                    <img class="me-4" src="{{ asset('assets/icons/icons8-instagram.svg') }}" alt="" height="30" width="30">
                                </a>
                                <a href="#" target="_blank" class="text-decoration-none text-dark">
                                    <img class="me-4" src="{{ asset('assets/icons/icons8-twitterx.svg') }}" alt="" height="30" width="30">
                                </a>
                                <a href="#" target="_blank" class="text-decoration-none text-dark">
                                    <img class="me-4" src="{{ asset('assets/icons/icons8-youtube.svg') }}" alt="" height="30" width="30">
                                </a>
                            </div>
                        </div>
                        {{-- Kolom 3 Kontak --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="font-inter fw-bold mb-3">Kontak Kami</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0 text-muted" href="#">ManarulQuran@gmail.com</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0 text-muted" href="#">021-xxx-xxx</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0 text-muted" href="#">021-xxx-xxx</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0 text-muted" href="#">021-xxx-xxx</a>
                                </li>
                            </ul>
                        </div>
                        {{-- Kolom 4 Alamat --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="font-inter fw-bold mb-3">Alamat Sekolah</h5>
                            <p>Kutorenon, Sukodono, Lumajang, Jawa Timur</p>
                        </div>
                    </div>
                </footer>
            </div>
        </section>
        {{-- Footer --}}

        {{-- Kebijakan Privasi --}}
        <section class="bg-light border-top">
            <div class="container py-3 pb-1">
                <div class="d-flex justify-content-between">
                    <div>Yayasan Manarul Quran</div>
                    <div class="d-flex">
                        <p class="me-4">Syarat & Ketentuan</p>
                        {{-- <p> --}}
                            <a href="#" class="text-decoration-none text-dark">Kebijakan Privacy</a>
                        {{-- </p> --}}
                    </div>
                </div>
            </div>
        </section>
        {{-- Kebijakan Privasi --}}

        {{-- Script --}}
        {{-- Magnific (Zoom Foto) --}}
        <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        {{-- Animation on Scroll (AoS) --}}
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        {{-- Ionicons --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        {{-- JQuery --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        {{-- Bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> <!-- Integrasi dengan Bootstrap's -->
        {{-- Scroll --}}
        <script>
            /* Navbar Scroll */
            const navbar = document.querySelector(".fixed-top");                
            window.onscroll = () => {
                if (window.scrollY > 1){
                    navbar.classList.add("scroll-nav-active");
                    navbar.classList.add("text-nav-active");
                    navbar.classList.remove("navbar-dark");
                } else {
                    navbar.classList.remove("scroll-nav-active");
                    navbar.classList.add("navbar-dark");
                }
            };
            /* Animation on Scroll (AOS) */
            AOS.init({
                // Global settings:
                disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
                startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
                initClassName: 'aos-init', // class applied after initialization
                animatedClassName: 'aos-animate', // class applied on animation
                useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
                disableMutationObserver: false, // disables automatic mutations' detections (advanced)
                debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
                throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


                // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
                offset: 60, // offset (in px) from the original trigger point
                delay: 250, // values from 0 to 3000, with step 50ms
                duration: 1500, // values from 0 to 3000, with step 50ms                        easing: 'ease', // default easing for AOS animations
                once: true, // whether animation should happen only once - while scrolling down
                mirror: false, // whether elements should animate out while scrolling past them
                anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
            });
        </script>

        {{-- summernote js --}}
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
        </script>
        {{-- Script --}}

    </body>
</html>

