<!DOCTYPE html>
<html>
<head>
    <title>Form Lapor Banjir</title>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3eee8;
            margin: 0;
            padding: 40px;
        }

        h2 {
            color: #6b4f3a;
            margin-bottom: 30px;
        }

        form {
            width: 550px;
        }

        label {
            display: inline-block;
            width: 170px;
            color: #4b382a;
            font-size: 16px;
            vertical-align: top;
            padding-top: 9px;
        }

        input,
        textarea {
            width: 260px;
            padding: 9px;
            border: 1px solid #c8b8a8;
            border-radius: 5px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        textarea {
            height: 80px;
            resize: vertical;
        }

        button {
            margin-left: 170px;
            padding: 9px 20px;
            background-color: #6b4f3a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
        }

        button:hover {
            background-color: #543d2d;
        }
    </style>
</head>

    <h2>Input Laporan</h2>
    <form action="/proses" method="post">
        @csrf

        <label>Nama Pelapor:</label>
        <input type="text" name="nama"><br><br>

        <label>Lokasi Kejadian:</label>
        <input type="text" name="lokasi"><br><br>

        <label>Tinggi Genangan Air:</label>
        <input type="number" name="Tinggi"><br><br>

        <label>Keterangan:</label>
        <textarea name="Keterangan"></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>

</body>
</html>