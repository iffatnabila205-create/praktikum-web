@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
<div class="card">
    <h1>Form Pelaporan Banjir</h1>
    <p class="subtitle">Isi data di bawah untuk melaporkan kejadian banjir di wilayah Anda.</p>

    @if ($errors->any())
        <div class="error-box">
            <ul style="margin:0; padding-left:18px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('laporbanjir.store') }}" method="POST">
        @csrf

        <label for="nama_pelapor">Nama Pelapor</label>
        <input type="text" id="nama_pelapor" name="nama_pelapor">

        <label for="lokasi">Lokasi Kejadian</label>
        <input type="text" id="lokasi" name="lokasi">

        <label for="tinggi_genangan">Tinggi Genangan Air (cm)</label>
        <input type="number" id="tinggi_genangan" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}" placeholder="Contoh: 45">

        <label for="tanggal_kejadian">Tanggal Kejadian</label>
        <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" value="{{ old('tanggal_kejadian') }}"> 

        <button type="submit">Kirim Laporan</button>
    </form>
</div>
@endsection