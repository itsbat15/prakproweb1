@extends('layouts.main')

@section('title', 'Home - Mahasiswa Sistem Informasi ITK')

@section('content')
<div class="container mt-4">
    <div class="row align-items-center">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/avatar.png') }}" class="img-fluid rounded-circle shadow" alt="Foto Profil" width="250">
        </div>
        <div class="col-md-8">
            <h2>Profil Saya</h2>
            <p>Nama saya Ariel Itsbat Nurhaq dengan NIM 10231018, seorang mahasiswa semester 4 di Institut Teknologi Kalimantan Program Studi Sistem Informasi.</p>
            <p>Keahlian saya meliputi penggunaan Laravel untuk pengembangan aplikasi web dan desain UI dengan Figma.</p>
        </div>
    </div>
</div>
@endsection
