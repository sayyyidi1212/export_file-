<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Delivery Order</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
            margin: 0;
            padding: 20px;
            line-height: 1.3;
            background-color: white;
        }

        .container {
            background-color: white;
            max-width: 210mm;
            margin: 0 auto;
            border: 2px solid #000;
            padding: 20px;
        }

        /* Header Section */
        .header {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            width: 100%;
            font-family: DejaVu Sans, sans-serif;
            font-size: 10px;
            gap: 10px;
            margin-bottom: 15px;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo {
            width: 60px;
            height: 60px;
        }

        .header-center {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }

        .header-right {
            display: flex;
            flex-direction: column;
            gap: 2px;
            text-align: right;
        }

        /* Info Section */
        .info-section {
            margin: 20px 0;
        }

        .info-section td {
            line-height: 1.5;
            /* jarak antar baris lebih longgar */
            padding-bottom: 4px;
            /* jarak bawah tiap sel */
            vertical-align: top;
        }

        .info-row {
            display: flex;
            /* biar label dan value sejajar */
            align-items: flex-start;
            margin-bottom: 8px;
            font-size: 11px;
        }

        .info-label {
            font-weight: bold;
            width: 160px;
            /* lebar label tetap */
            flex-shrink: 0;
        }

        .info-value {
            flex: 1;
            /* biar value memanjang ke kanan */
        }

        /* Items Table */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 11px;
        }

        .items-table th,
        .items-table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            vertical-align: middle;
        }

        .items-table th {
            background-color: #f5f5f5;
            font-weight: bold;
            text-align: center;
            font-size: 10px;
        }

        .items-table .number-col {
            width: 40px;
            text-align: center;
        }

        .items-table .perkebunan-col {
            width: 25%;
        }

        .items-table .jenis-col {
            width: 20%;
        }

        .items-table .berat-col {
            width: 15%;
            text-align: right;
        }

        .items-table .keterangan-col {
            width: 35%;
        }

        .total-row {
            font-weight: bold;
            background-color: #f9f9f9;
        }

        .total-row td {
            border-top: 2px solid #000;
            font-size: 12px;
        }

        /* Footer Section */
        .footer {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .notes {
            flex: 1;
            font-size: 10px;
            line-height: 1.4;
            margin-right: 30px;
            padding-right: 20px;
        }

        .signature-section {
            text-align: center;
            width: 250px;
            border-left: 1px solid #ddd;
            padding-left: 20px;
        }

        .signature-location {
            font-size: 11px;
            margin-bottom: 8px;
        }

        .signature-title {
            font-size: 11px;
            font-weight: bold;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .signature-company {
            font-size: 10px;
            margin-bottom: 30px;
        }

        .stamp-area {
            width: 100px;
            height: 100px;
            border: 2px solid #000;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 9px;
            text-align: center;
            font-weight: bold;
        }

        .signature-name {
            font-size: 11px;
            font-weight: bold;
            border-bottom: 2px solid #000;
            padding-bottom: 3px;
            margin-bottom: 5px;
            display: inline-block;
            min-width: 180px;
        }
    </style>
    </style>
</head>

<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <table class="header-table" width="100%" style="border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <!-- Kolom 1: Logo -->
                    <td width="10%">
                        <img src="{{ public_path('images/logo.png') }}" style="width:60px; height:60px;" alt="Logo">
                    </td>

                    <!-- Kolom 2: Nama Perusahaan -->
                    <td width="35%" style="vertical-align: middle; font-size: 10px;">
                        <strong>PT. NAMA PERUSAHAAN</strong><br>
                        Alamat Perusahaan<br>
                        Telp: (0331) 123456<br>
                        Email: info@perusahaan.com
                    </td>

                    <!-- Kolom 3: DELIVERY ORDER -->
                    <td width="25%" style="text-align: center; vertical-align: middle; font-size: 16px; font-weight: bold;">
                        DELIVERY ORDER
                    </td>

                    <!-- Kolom 4: Info kanan -->
                    <td width="30%" style="text-align: right; vertical-align: middle; font-size: 10px;">
                        NO: {{ $no_do ?? '046/612' }}<br>
                        EX KONTRAK: {{ $no_kontrak ?? '108 / 1710 / 2025' }}<br>
                        Tgl: {{ $tanggal ?? '21 April 2025' }}
                    </td>
                </tr>
            </table>
        </div>

        <!-- Info Section -->
        <div class="info-section">
            <table width="100%" style="border-collapse: collapse; margin-bottom: 20px; font-size: 11px;">
                <tr>
                    <td style="font-weight: bold; width: 150px; text-align: left;">Kepada</td>
                    <td style="width: 10px; text-align: left;">:</td>
                    <td>{{ $penerima ?? 'PT. SILO MANDALING UTAMA DI PUNCAK / GUDANG BITUNG PTPS' }}</td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left;">Alamat Pengiriman U.P</td>
                    <td style="text-align: left;">:</td>
                    <td>{{ $alamat_pengiriman ?? 'Dalam Kendaraan berupa: Truk yang mengikat diri untuk mengutip' }}</td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left;">No. Kendaraan</td>
                    <td style="text-align: left;">:</td>
                    <td>{{ $no_kendaraan ?? 'dari PT. NATIONAL SHIPPING, KUD' }}</td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left;">Jenis</td>
                    <td style="text-align: left;">:</td>
                    <td>{{ $jenis_barang ?? 'B Peka Rayon dari 75 Karung' }}</td>
                </tr>
                <tr>
                    <td style="font-weight: bold; text-align: left;">Tahun Panen</td>
                    <td style="text-align: left;">:</td>
                    <td>{{ $tahun_panen ?? '2025' }}</td>
                </tr>
            </table>
        </div>


        <!-- Items Table -->
        <div class="items-wrapper">
            <table class="items-table">
                <thead>
                    <tr>
                        <th class="number-col">No</th>
                        <th class="perkebunan-col">Perkebunan</th>
                        <th class="jenis-col">Jenis / Mutu</th>
                        <th class="berat-col">Berat Bersih<br>(Kg)</th>
                        <th class="keterangan-col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($items ?? [
                    ['perkebunan' => 'PTPN 1', 'jenis' => 'RSS 3', 'berat' => '978,00', 'keterangan' => ''],
                    ['perkebunan' => 'PTPN 2', 'jenis' => 'RSS 3', 'berat' => '1.500,00', 'keterangan' => ''],
                    ['perkebunan' => 'PTPN 3', 'jenis' => 'RSS 3', 'berat' => '1.200,00', 'keterangan' => ''],
                    ['perkebunan' => 'LAIN LAIN', 'jenis' => 'RSS 3', 'berat' => '1.642,00', 'keterangan' => '']
                    ] as $item)
                    <tr>
                        <td class="number-col">{{ $no++ }}</td>
                        <td class="perkebunan-col">{{ $item['perkebunan'] }}</td>
                        <td class="jenis-col">{{ $item['jenis'] }}</td>
                        <td class="berat-col">{{ $item['berat'] }}</td>
                        <td class="keterangan-col">{{ $item['keterangan'] ?? '' }}</td>
                    </tr>
                    @endforeach
                    <tr class="total-row">
                        <td colspan="3" style="text-align: center;"><strong>J U M L A H</strong></td>
                        <td class="berat-col"><strong>{{ $total ?? '5.320,00' }}</strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Footer -->
        <div class="footer-wrapper">
            <div class="footer">
                <div class="notes">
                    <p><strong>Catatan:</strong></p>
                    <p>Barang yang dikirimkan hapalah kepada kepercayaan REKANAN, kita ikoma keresahan di Gudang Ranne dapat berjaan-karaan agar kita kelola Jember ini!</p>
                </div>

                <!-- Signature di kanan -->
                <div class="signature-section" style="text-align: center; width: 250px; margin-left: auto;">
                    <div class="signature-location">{{ $kota ?? 'Jember' }}, {{ $tanggal_ttd ?? date('d') }} {{ $bulan ?? 'Agustus' }} {{ $tahun ?? '2025' }}</div>

                    <div class="signature-title">{{ $jabatan ?? 'DIREKTUR UTAMA' }}</div>
                    <div class="signature-company">PT. MANDAILING SUKSES LESTARI</div>

                    <div class="stamp-area">
                        MATERAI<br>
                        &<br>
                        STEMPEL<br>
                        PERUSAHAAN
                    </div>

                    <div class="signature-name">{{ $nama ?? 'SOFYAN BAGUS, S.M., MM' }}</div>
                </div>
            </div>

            <!-- Catatan tambahan di bawah footer -->
            <div style="margin-top: 10px; font-size: 10px; line-height: 1.3;">
                <p><strong>Catatan:</strong></p>
                <p>1: Barang diterima sesuai pesanan.</p>
                <p>2: Mohon diperiksa kondisi barang sebelum ditandatangani.</p>
                <p>3: Simpan dokumen ini sebagai bukti pengiriman.</p>
            </div>
        </div>


    </div>
</body>

</html>