{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
    <div class="container">
        <a class="navbar-item" href="#">
            <img src="{{ asset('assets/icons/PonPesMQ 150x150.png') }}" height="55" width="55" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Tentang Kami</a> <!-- Termasuk Menu Kontak -->
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Pendaftaran</a>
                </li>
            </ul>
            
            <!-- Kolom Cari -->
            <div class="d-flex justify-content-center px-5">
                <div class="search"> <!-- Rencananya akan digunakan untuk mencari data di database berita dari keyword yang dimasukkan dan diforward ke menu berita dan menampilkan berita dari keyword yang dimasukkan-->
                    <input class="search-input" type="search" placeholder="Cari" aria-label="Cari">
                    <a href="#" class="search-icon"> <!-- Kedepannya akan menggunakan id untuk konfigurasi lebih fleksibel -->
                        <ion-icon name="search-outline"></ion-icon>
                    </a>
                </div>
            </div>
            <!-- Kolom Cari -->

            {{-- Tombol Login --}}
            <div class="d-flex">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                @endauth
            </div>
            {{-- Tombol Login --}}
        </div>
    </div>
</nav>
{{-- Navbar --}}
