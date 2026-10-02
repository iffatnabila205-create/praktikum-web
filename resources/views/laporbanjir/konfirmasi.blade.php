@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
<div class="card">
    <x-alert type="success">
         Laporan banjir berhasil dikirim! Berikut ringkasan data yang Anda laporkan.
    </x-alert>

    <table>
        <tr>
            <td class="label">Nama Pelapor</td>
            <td>{{ $nama_pelapor }}</td>
        </tr>
        <tr>
            <td class="label">Lokasi Kejadian</td>
            <td>{{ $lokasi }}</td>
        </tr>
        <tr>
            <td class="label">Tinggi Genangan Air</td>
            <td>{{ $tinggi_genangan }} cm</td>
        </tr>
    </table>

    <a href="{{ route('laporbanjir.form') }}" class="btn-back">Kirim Laporan Lain</a>
</div>
@endsection