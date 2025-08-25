<!-- resources/views/pemenang/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pemenang</title>
</head>
<body>
    <h1>Daftar Pemenang</h1>

    <!-- Tabel dummy -->
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Barang</th>
                <th>Harga</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 5; $i++)
            <tr>
                <td>{{ $i }}</td>
                <td>Nama {{ $i }}</td>
                <td>Barang {{ $i }}</td>
                <td>Rp {{ number_format(1000000 * $i, 0, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::now()->format('d-m-Y') }}</td>
            </tr>
            @endfor
        </tbody>
    </table>

    <br>
    <h3>Export PDF</h3>

    <!-- Tombol export lama -->
    <a href="{{ route('export.pemenang') }}" style="margin-right: 10px;">Export PDF Lama</a>

    <!-- Tombol export baru (dummy) -->
    <a href="{{ route('export.pemenang1') }}" style="margin-right: 10px;">Export PDF 1</a>
    <a href="{{ route('export.pemenang2') }}" style="margin-right: 10px;">Export PDF 2</a>
    <a href="{{ route('export.pemenang3') }}" style="margin-right: 10px;">Export PDF 3</a>
    <a href="{{ route('export.pemenang4') }}" style="margin-right: 10px;">Export PDF 4</a>
    <a href="{{ route('export.pemenang5') }}" style="margin-right: 10px;">Export PDF 5</a>
    <a href="{{ route('export.pemenang6') }}" style="margin-right: 10px;">Export PDF 6</a>
</body>
</html>
