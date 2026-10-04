@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <h2>Form Pelaporan Banjir</h2>

    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf

        <label>Nama Pelapor</label>
        <input type="text" name="nama" required>

        <label>Lokasi Kejadian</label>
        <input type="text" name="lokasi" required>

        <label>Tinggi Genangan Air (cm)</label>
        <input type="number" name="tinggi" required>

        <br><br>
        <button type="submit">Kirim Laporan</button>
    </form>
@endsection