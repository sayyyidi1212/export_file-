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
            /* border utama */
            padding: 0;
        }

        /* ==== Header Section ==== */
        .header {
            padding: 10px;
            border-bottom: 2px solid #000;
            /* garis tebal bawah header */
        }

        /* ==== Info Section ==== */
        .info-section {
            padding: 10px;
            border-bottom: 2px solid #000;
            /* garis tebal bawah info */
        }

        /* ==== Items Table ==== */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 11px;
        }

        .items-table th,
        .items-table td {
            border: 0.5px solid #000;
            /* garis tabel tipis */
            padding: 6px;
            vertical-align: middle;
        }

        .items-table th {
            background-color: #f5f5f5;
            font-weight: bold;
            text-align: center;
            font-size: 10px;
        }

        .total-row td {
            border-top: 2px solid #000;
            font-weight: bold;
            background-color: #f9f9f9;
            font-size: 12px;
        }

        /* ==== Footer Section ==== */
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 15px;
            border-top: 2px solid #000;
            /* garis tebal atas footer */
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
            padding-left: 20px;
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

        /* ==== Catatan tambahan bawah ==== */
        .extra-notes {
            margin-top: 5px;
            padding: 8px 15px;
            font-size: 10px;
            line-height: 1.4;
            border-top: 1px solid #000;
            /* garis tipis */
            text-align: left;
        }

        .extra-notes ol {
            margin: 0;
            padding-left: 18px;
        }
    </style>


</head>

<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <table class="header-table" width="100%" style="border-collapse: collapse; margin-bottom: 10px;">
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
            <table width="100%" style="border-collapse: collapse; margin-bottom: 10px; font-size: 11px;">
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
            <table class="items-table" style="width: 100%; border-collapse: collapse; font-size: 11px;">
                <thead>
                    <tr>
                        <th style="border: 1px solid #000; padding: 6px; text-align: center;">Kebun</th>
                        <th style="border: 1px solid #000; padding: 6px; text-align: center;">Jenis / Mutu</th>
                        <th style="border: 1px solid #000; padding: 6px; text-align: center;">Berat (Kg)</th>
                        <th style="border: 1px solid #000; padding: 6px; text-align: center;">Harga Satuan / Kg (Rp)</th>
                        <th style="border: 1px solid #000; padding: 6px; text-align: center;">Jumlah (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    @php $grandTotal = 0; @endphp
                    @foreach ($items as $perkebunan => $rows)
                    @php $rowspan = count($rows); @endphp
                    @foreach ($rows as $i => $item)
                    <tr>
                        @if ($i == 0)
                        <td style="border: 1px solid #000; padding: 6px; vertical-align: top;" rowspan="{{ $rowspan }}">
                            {{ $perkebunan }}
                        </td>
                        @endif
                        <td style="border: 1px solid #000; padding: 6px; text-align: center;">
                            {{ $item['jenis'] }}
                        </td>
                        <td style="border: 1px solid #000; padding: 6px; text-align: right;">
                            {{ number_format($item['berat'], 0, ',', '.') }}
                        </td>
                        <td style="border: 1px solid #000; padding: 6px; text-align: right;">
                            {{ number_format($item['harga'], 0, ',', '.') }}
                        </td>
                        <td style="border: 1px solid #000; padding: 6px; text-align: right;">
                            @php
                            $jumlah = $item['berat'] * $item['harga'];
                            $grandTotal += $jumlah;
                            @endphp
                            {{ number_format($jumlah, 0, ',', '.') }}
                        </td>
                    </tr>
                    @endforeach
                    @endforeach
                    <tr class="total-row">
                        <td colspan="4" style="border: 1px solid #000; text-align: center; font-weight: bold;">
                            TOTAL
                        </td>
                        <td style="border: 1px solid #000; text-align: right; font-weight: bold;">
                            {{ number_format($grandTotal, 0, ',', '.') }}
                        </td>
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
            <div style="margin-top: 10px; font-size: 10px; line-height: 1.3; padding-left: 15px; text-align: left; border-top: 1px solid #000; padding-top: 5px;">
                <p><strong>Catatan:</strong></p>
                <p>1: Barang diterima sesuai pesanan.</p>
                <p>2: Mohon diperiksa kondisi barang sebelum ditandatangani.</p>
                <p>3: Simpan dokumen ini sebagai bukti pengiriman.</p>
            </div>
        </div>


    </div>
</body>

</html>