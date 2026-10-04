<div class="card">
    <h3>{{ $laporan['nama'] }}</h3>
    <p><strong>Lokasi:</strong> {{ $laporan['lokasi'] }}</p>
    <p><strong>Tinggi genangan:</strong> {{ $laporan['tinggi'] }} cm</p>

    @if($laporan['tinggi'] < 30)
        <p>Status: <span style="color:green;">Waspada</span></p>
    @elseif($laporan['tinggi'] <= 70)
        <p>Status: <span style="color:orange;">Siaga</span></p>
    @else
        <p>Status: <span style="color:red;">Awas</span></p>
    @endif
</div>