<!DOCTYPE html>
<html>
<head>
    <title>Hasil Laporan Banjir</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3eee8;
            margin: 0;
            padding: 40px 16px;
            color: #3f3025;
        }

        .kotak {
            width: 500px;
            margin: 0 auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            color: #6b4f3a;
            margin-top: 0;
            margin-bottom: 30px;
        }

        .data {
            margin-bottom: 18px;
        }

        .data label {
            display: block;
            font-weight: bold;
            margin-bottom: 7px;
            color: #4b382a;
        }

        .isi {
            width: 100%;
            padding: 10px;
            background: #f8f5f1;
            border: 1px solid #c8b8a8;
            border-radius: 5px;
            min-height: 40px;
        }

        .tombol {
            display: block;
            width: 100%;
            margin-top: 25px;
            padding: 11px;
            background: #6b4f3a;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }

        .tombol:hover {
            background: #543d2d;
        }
    </style>
</head>

<body>

    <div class="kotak">

        <h2>Hasil Laporan Banjir</h2>

        <div class="data">
            <label>Nama Pelapor:</label>
            <div class="isi">
                {{ $nama }}
            </div>
        </div>

        <div class="data">
            <label>Lokasi Kejadian:</label>
            <div class="isi">
                {{ $lokasi }}
            </div>
        </div>

        <div class="data">
            <label>Tinggi Genangan Air:</label>
            <div class="isi">
                {{ $Tinggi }} cm
            </div>
        </div>

        <div class="data">
            <label>Keterangan:</label>
            <div class="isi">
                {{ $Keterangan }}
            </div>
        </div>

        <a href="/form" class="tombol">Kembali ke Form</a>

    </div>

</body>
</html>