@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    {{-- Komponen Alert --}}
    <x-alert type="success" :message="'Terima kasih, ' . $laporan['nama'] . '! Laporan banjir Anda berhasil dikirim.'" />

    <p>Berikut data yang telah Anda kirim:</p>
    @include('partials.laporan-card', ['laporan' => $laporan])

    <a class="btn-link" href="{{ route('laporan.create') }}">&larr; Buat laporan lain</a>
    |
    <a class="btn-link" href="{{ route('laporan.index') }}">Lihat daftar laporan &rarr;</a>
@endsection