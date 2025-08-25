<!-- resources/views/pemenang/index.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pemenang</title>
</head>

<body>
    <h1>Daftar Pemenang</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Barang</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemenang as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['barang'] }}</td>
                <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('d-m-Y') }}</td>
            </tr>
            @endforeach




        </tbody>
    </table>

    <br>
    <a href="{{ route('export.pemenang') }}">Export PDF</a>
</body>

</html>