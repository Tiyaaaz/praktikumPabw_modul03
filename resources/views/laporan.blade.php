<div class="card">
    <h3>{{ $laporan['nama'] }}</h3>
    <p><strong>Lokasi:</strong> {{ $laporan['lokasi'] }}</p>
    <p><strong>Tinggi genangan:</strong> {{ $laporan['tinggi'] }} cm</p>
    <p><strong>Waktu lapor:</strong> {{ $laporan['waktu'] }}</p>

    @if($laporan['tinggi'] < 30)
        <p>Status: <span class="badge badge-waspada">Waspada</span></p>
    @elseif($laporan['tinggi'] <= 70)
        <p>Status: <span class="badge badge-siaga">Siaga</span></p>
    @else
        <p>Status: <span class="badge badge-awas">Awas</span></p>
    @endif
</div>