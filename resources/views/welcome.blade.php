@extends('layouts.layouts')

@section('content')
        {{-- Hero (Tulisan di depan foto beranda) --}}
        <section id="hero" class="px-0">
            <div class="container text-center text-white">
                <div class="hero-title"  data-aos="fade-up">
                    <div class="hero-text">Selamat Datang di<br> Yayasan Manarul Quran</div>
                    <h4>Membentuk Generasi Qur'ani</h4>
                </div>
            </div>
        </section>
        {{-- Hero (Tulisan di depan foto beranda) --}}

        {{-- Tampilan mini di bawah foto beranda --}}
        <section class="" id="program" style="margin-top: -30px">
            <div class="container col-xxl-9">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col mb-2"  data-aos="flip-up" data-aos-delay="500">
                        <div class="bg-white shadow rounded-3 p-3 d-flex justify-content-between align-items-center">
                            <div class="tulisan-mini">500+ Santri</div>
                            <img src="{{ asset('assets/images/fakta-book.png') }}" height="55" width="55" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-up" data-aos-delay="900">
                        <div class="bg-white shadow rounded-3 p-3 d-flex justify-content-between align-items-center">
                            <div class="tulisan-mini">1000+ Alumni</div>
                            <img src="{{ asset('assets/images/fakta-globe.png') }}" height="55" width="55" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col" data-aos="flip-up" data-aos-delay="1300">
                        <div class="bg-white shadow rounded-3 p-3 d-flex justify-content-between align-items-center">
                            <div class="tulisan-mini">5 Tahun Pengalaman</div>
                            <img src="{{ asset('assets/images/fakta-neraca.png') }}" height="55" width="55" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col" data-aos="flip-up" data-aos-delay="1700">
                        <div class="bg-white shadow rounded-3 p-3 d-flex justify-content-between align-items-center">
                            <div class="tulisan-mini">15 Tenaga Pendidik</div>
                            <img src="{{ asset('assets/images/fakta-komputer.png') }}" height="55" width="55" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Tampilan mini di bawah foto beranda --}}

        {{-- Berita --}}
        <section id="berita" class="py-5">
            <div class="container" data-aos="fade-up" data-aos-delay="1250">
                <div class="header-berita text-center">
                    <h2 class="fw-bold">Berita Kegiatan Yayasan</h2>
                </div>
                <div class="row py-5">
                    <div class="col-lg-4">
                        <div class="card border-0" data-aos="fade-up" data-aos-delay="1500">
                            <img src="{{ asset('assets/images/berita-01.png') }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">13/01/2024</p>
                                <h4 class="fw-bold mb-3">Pengajian Bulanan Yayasan Manarul Quran</h4>
                                <p class="text-secondary">#pengajian</p>
                                <a href="" class="text-decoration-none text-success">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0" data-aos="fade-up" data-aos-delay="1750">
                            <img src="{{ asset('assets/images/berita-02.png') }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">13/01/2024</p>
                                <h4 class="fw-bold mb-3">Khataman Mingguan</h4>
                                <p class="text-secondary">#khataman</p>
                                <a href="" class="text-decoration-none text-success">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0" data-aos="fade-up" data-aos-delay="2000">
                            <img src="{{ asset('assets/images/berita-03.png') }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">13/01/2024</p>
                                <h4 class="fw-bold mb-3">Program Peningkatan Makanan Bergizi</h4>
                                <p class="text-secondary">#sehatdimulaidariaku</p>
                                <a href="" class="text-decoration-none text-success">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-berita text-center">
                    <a href="" class="btn btn-outline-success">Berita Lainnya</a>
                </div>
            </div>
        </section>
        {{-- Berita --}}

        {{-- Join --}}
        <section id="join" class="py-5">
            <div class="container py-5">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="d-flex align-items-center mb-3">
                            <div class="stripe me-2"></div> <!-- Stripe Merah -->
                            <h5>Daftar Santri</h5>
                        </div>
                        <h1 class="fw-bold mb-2">Gabung bersama kami, mewujudkan generasi qurani</h1>
                        <p class="mb-3">
                            Yayasan Manarul Quran merupakan yayasan qurani di Kabupaten Lumajang yang berhasil meluluskan berbagai santri berkualitas
                            dan menjadi ustaz untuk melanjutkan dakwah mengaji quran di seluruh nusantara
                        </p>
                        <button class="btn btn-outline-success">Daftar</button>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="{{ asset('assets/images/join.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        {{-- Join --}}

        {{-- Video --}}
        {{-- Video-Solo --}}
        <section id="video" class="py-5">
            <div class="container py-5">
                <div class="text-center" data-aos="zoom-in-up">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_xPjR3WFYAY?si=klEWtb8b6V7Vze8Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        {{-- Video-Solo --}}

        {{-- Video-Multi --}}
        <section id="video_youtube" class="py-5">
            <div class="container py-5" data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom">
                <div class="header-berita text-center mb-5">
                    <h2 class="fw-bold">Video Kegiatan Pondok Pesantren</h2>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-4" data-aos="zoom-in-right">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/_xPjR3WFYAY?si=klEWtb8b6V7Vze8Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-in-up">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/_xPjR3WFYAY?si=klEWtb8b6V7Vze8Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-in-left">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/_xPjR3WFYAY?si=klEWtb8b6V7Vze8Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="footer-berita text-center">
                    <a href="" class="btn btn-outline-success">Video Lainnya</a>
                </div>
            </div>
        </section>
        {{-- Video-Multi --}}
        {{-- Video --}}

        {{-- Foto Kegiatan --}}
        <section id="foto" class="section-foto kegiatan">
            <div class="container" data-aos="fade-down" data-aos-anchor-placement="center-bottom" data-aos-delay="750">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div class="d-flex align-items-center">
                        <div class="stripe-putih me-2"></div>
                        <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                    </div>
                    <div>
                        <a href="" class="btn btn-outline-light">Foto Lainnya</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6">
                        <img src="{{ asset('assets/images/il-photo-01.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <img src="{{ asset('assets/images/il-photo-03.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <img src="{{ asset('assets/images/il-photo-04.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        {{-- Foto Kegiatan --}}

        {{-- Fasilitas --}}
        {{-- Coming Soon - Model tampilan dari contoh e kurang menarik untuk dibuat --}}
        <section id="fasilitas" class="py-5">
            <div class="container py-5" data-aos="fade-down" data-aos-anchor-placement="center-bottom" data-aos-delay="1000">
                <div class="text-center mb-5">
                    <h3 class="fw-bold">Fasilitas Pesantren</h3>
                </div>
                <!-- Konten Utama -->
                <div class="text-center">
                    <a href="" class="btn btn-outline-success">Selengkapnya</a>
                </div>
            </div>
        </section>
        {{-- Fasilitas --}}
@endsection
