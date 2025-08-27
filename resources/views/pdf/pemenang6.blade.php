<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Surat Pemenang 3</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            margin: 30px;
            line-height: 1.5;
        }

        /* ==== Header Section ==== */
        .header {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            font-size: 10px;
            gap: 10px;
            padding: 10px;

            /* pemisah */
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


        .kop {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .kop-left img {
            width: 100px;
        }

        .kop-right {
            text-align: right;
            font-size: 10px;
        }

        .content {
            text-align: justify;
        }

        .harga {
            margin-left: 40px;
        }

        .ttd {
            margin-top: 20px;
            width: 100%;
            text-align: right;
        }

        .ttd p {
            margin: 4px 0;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
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


                <!-- Kolom 4: Info kanan -->
                <td width="30%" style="text-align: right; vertical-align: middle; font-size: 10px;">
                    <p><strong>Kantor Direksi</strong><br>
                        Jl. Gajahmada No. 245 Kebonsari – Jember<br>
                        Telp. (0331) 487244, 487554<br>
                        Fax. (0331) 486034</p>
                </td>
            </tr>
        </table>
    </div>
    <!-- Isi Surat -->
    <div class="content" style="font-size: 11px; line-height: 1.6;">
      <table width="100%">
            <tr>
                <!-- Kolom Kiri -->
                <td width="50%" style="text-align: left; vertical-align: top; font-size: 10px;">
                    <p>Nomor : 08200208208</p>
                    <p>Sifat : Penting</p>
                    <P>lapiran : - </P>
                    <p>Perihal : Permintaan Penawaran Harga Karet RSS</p>
                </td>

                <!-- Kolom Kanan -->
                <td width="50%" style="text-align: right; vertical-align: top; font-size: 10px;">
                    <p>Jember, 17 April 2025</p>
                    <p>Kepada Yth.<br>
                        Rekanan<br>
                        Perumda Kahyangan<br>
                        <span class="bold">Tempat</span>
                    </p>
                </td>
            </tr>
        </table>



        <p style="text-indent:20px;">
            Menindaklanjuti Surat Direksi tanggal 17 April 2025 nomor 046/1389/TPJ/2025, sebanyak 11 (sebelas) rekanan diundang untuk melakukan penawaran dan 4 (empat) rekanan membalas, penawaran sebagai berikut:
        </p>

        <table style="width: 100%; border-collapse: collapse; margin-bottom: 15px;">
            <thead>
                <tr>
                    <th style="border: 1px solid #000; padding: 6px; text-align: center;">No</th>
                    <th style="border: 1px solid #000; padding: 6px; text-align: center;">Perkebunan</th>
                    <th style="border: 1px solid #000; padding: 6px; text-align: center;">Jenis</th>
                    <th style="border: 1px solid #000; padding: 6px; text-align: center;">Berat (Kg)</th>
                    <th style="border: 1px solid #000; padding: 6px; text-align: center;">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td style="border: 1px solid #000; padding: 6px; text-align: center;">{{ $item['no'] }}</td>
                    <td style="border: 1px solid #000; padding: 6px; text-align: center;">{{ $item['perkebunan'] }}</td>
                    <td style="border: 1px solid #000; padding: 6px; text-align: center;">{{ $item['jenis'] }}</td>
                    <td style="border: 1px solid #000; padding: 6px; text-align: center;">{{ number_format($item['berat'], 0, ',', '.') }}</td>
                    <td style="border: 1px solid #000; padding: 6px; text-align: center;">{{ $item['keterangan'] }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" style="border: 1px solid #000; padding: 6px; text-align: center; font-weight: bold;">TOTAL</td>
                    <td style="border: 1px solid #000; padding: 6px; text-align: center; font-weight: bold;">{{ number_format($total, 0, ',', '.') }}</td>
                    <td style="border: 1px solid #000; padding: 6px; text-align: center;">-</td>
                </tr>
            </tfoot>
        </table>
        <p style="margin-top:10px; text-indent: 15px; font-size:11px;">
            Demikian untuk menjadikan periksa dan mohon petunjuk lebih lanjut.
        </p>

    </div>



    <!-- Tanda Tangan -->
    <div class="ttd">
        <p>Hormat kami,</p>
        <p class="bold"> Pemasaran dan Pengembangan Bisnis</p>
        <br><br><br>
        <p class="bold"><u>NURUL HIDAYAT, STP</u></p>
    </div>

    <!-- Footer -->
    <footer style="
    position: fixed; 
    bottom: 0; 
    left: 0; 
    width: 100%; 
    text-align: center; 
    font-size: 10px; 
    padding: 10px 0;
  
">
        <p>Ikuti Kami:</p>
        <p>
            <a href="https://www.instagram.com/pdp_official" target="_blank">Instagram</a> |
            <a href="https://www.facebook.com/pdp.official" target="_blank">Facebook</a> |
            <a href="https://x.com/pdp_official" target="_blank">Twitter/X</a> |
            <a href="https://www.youtube.com/@pdpjember" target="_blank">YouTube</a>
        </p>
        <p>Email: <a href="mailto:sekretariat@pdp.kahyangan.co.id">sekretariat@pdp.kahyangan.co.id</a></p>
    </footer>


</body>

</html>