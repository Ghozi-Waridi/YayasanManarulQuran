@extends('layouts.layouts')

@section('content')
    <section class="py-5" style="margin-top: 100px">
        <div class="container">
            <h1>Ini adalah halaman Admin</h1>
            <div class="blog">
                <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </section>

@endsection