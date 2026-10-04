@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    <x-alert type="success" message="Laporan banjir berhasil dikirim." />

    @include('partials.laporan-card', ['laporan' => $laporan])
@endsection