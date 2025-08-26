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
            border-bottom: 2px solid #000;
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
                <td width="30%" style="text-align: right; vertical-align: top; font-size: 10px;">
                    <p>Jember, 17 April 2025</p>
                    <p>Kepada Yth.<br>
                        Rekanan<br>
                        Perumda Kahyangan<br>
                        <span class="bold">Tempat</span>
                    </p>
                </td>
            </tr>
        </table>

        <p>
            Menindaklanjuti surat penawaran Saudara tanggal <b>17 April 2025</b> perihal penawaran harga karet RSS,
            bersama ini kami sampaikan agar Saudara dapat menaikkan harga penawaran.
        </p>

        <p class="bold">
            Penawaran balasan dapat kami terima paling lambat pada tanggal <b>17 April 2025</b> pukul <b>14.15 WIB</b>.
        </p>

        <p>
            Harapan kami, agar Saudara dalam pengajuan berikutnya dapat memberikan penawaran yang lebih kompetitif.
        </p>

        <p>
            Demikian untuk dimaklumi.
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