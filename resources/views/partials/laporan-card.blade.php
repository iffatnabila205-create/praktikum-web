<div class="laporan-card">
    <div class="laporan-info">
        <h3>{{ $laporan['nama_pelapor'] }}</h3>
        <p> {{ $laporan['lokasi'] }}</p>
        <p> Tinggi Genangan: {{ $laporan['tinggi_genangan'] }} cm</p>
    </div>

    @if ($laporan['tinggi_genangan'] < 30)
        <span class="status-badge status-waspada">Waspada</span>
    @elseif ($laporan['tinggi_genangan'] <= 70)
        <span class="status-badge status-siaga">Siaga</span>
    @else
        <span class="status-badge status-awas">Awas</span>
    @endif
</div>