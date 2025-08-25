<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laporan Pemenang Lelang</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            margin: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 15px;
        }

        header img {
            width: 80px;
            margin-bottom: 5px;
        }

        h2 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        p.subtitle {
            margin: 2px 0 10px 0;
            font-size: 14px;
            color: #555;
        }

        hr {
            border: 1px solid #000;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            font-size: 12px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        footer {
            position: fixed;
            bottom: 15px;
            width: 100%;
            text-align: center;
            font-size: 10px;
            color: #555;
        }
    </style>
</head>

<body>
    <header>
        <img src="{{ public_path('images/logo.png') }}" alt="Logo Perusahaan">
        <h2>Perusahaan ABC</h2>
        <p class="subtitle">Laporan Pemenang Lelang</p>
        <hr>
    </header>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemenang</th>
                <th>Barang</th>
                <th>Harga</th>
                <th>Tanggal Menang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemenang as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['barang'] }}</td>
                <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <footer>
        Laporan resmi diterbitkan oleh <strong>Perusahaan ABC</strong> &copy; {{ date('Y') }}
    </footer>
</body>

</html>
