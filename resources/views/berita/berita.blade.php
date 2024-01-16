@extends('layouts.layouts')

@section('content')
{{-- Berita --}}
<section id="berita" class="py-5 mt-5">
    <div class="container" data-aos="fade-up" data-aos-delay="1250">
        <div class="header-berita text-center mt-5">
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
@endsection
