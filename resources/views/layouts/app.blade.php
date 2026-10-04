<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | LaporBanjir</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #efebe9; color: #3e2723; }
        header { background: #5d4037; color: #fff; padding: 15px 20px; text-align: center; }
        header h1 { margin: 0 0 8px; }
        nav a { color: #ffe0b2; margin: 0 12px; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #fff; text-decoration: underline; }
        main { max-width: 800px; margin: 20px auto; padding: 0 15px; }
        h2 { color: #4e342e; }
        footer { background: #d7ccc8; color: #3e2723; padding: 10px; text-align: center; margin-top: 30px; font-size: 14px; }
        .card { background: #fffaf5; border: 1px solid #bcaaa4; border-left: 5px solid #8d6e63; border-radius: 6px; padding: 15px; margin: 10px 0; }
        .card h3 { margin-top: 0; color: #4e342e; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box; border: 1px solid #a1887f; border-radius: 4px; background: #fffaf5; }
        input:focus { outline: 2px solid #8d6e63; }
        button { margin-top: 15px; padding: 10px 20px; background: #6d4c41; color: #fff; border: 0; border-radius: 4px; cursor: pointer; }
        button:hover { background: #4e342e; }
    </style>
</head>
<body>
    <header>
        <h1>Lapor Banjir</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 LaporBanjir - BPBD Kabupaten Bandung</p>
    </footer>
</body>
</html>