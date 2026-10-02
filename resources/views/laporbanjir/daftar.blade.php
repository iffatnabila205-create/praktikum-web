@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
<div class="card wide">
    <h1>Daftar Laporan Banjir</h1>
    <p class="subtitle">Berikut beberapa laporan banjir yang masuk dari warga.</p>

    @forelse ($laporans as $laporan)
        @include('partials.laporan-card', ['laporan' => $laporan])
    @empty
        <p>Belum ada laporan masuk.</p>
    @endforelse
</div>
@endsection