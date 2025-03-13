@extends('layouts.main')

@section('title', 'Contact - Mahasiswa Sistem Informasi ITK')

@section('content')
<div class="container mt-4">
    <div class="text-center">
        <h1>Hubungi Saya</h1>
        <p>Jika Anda ingin berdiskusi atau bekerja sama, silakan hubungi saya melalui kontak berikut.</p>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">📍 Lokasi</h5>
                    <p class="card-text">Institut Teknologi Kalimantan, Balikpapan, Kalimantan Timur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">📧 Kontak</h5>
                    <p class="card-text">
                        <a href="https://www.instagram.com/arielitsnr/" class="btn btn-danger" target="_blank">
                            <i class="bi bi-instagram"></i> Instagram
                        </a>
                        <a href="https://github.com/itsbat15" class="btn btn-dark" target="_blank">
                            <i class="bi bi-github"></i> GitHub
                        </a>
                        <a href="https://wa.me/6285248963967" class="btn btn-success" target="_blank">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
