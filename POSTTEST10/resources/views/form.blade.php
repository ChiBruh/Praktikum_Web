<!-- resources/views/penduduk.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendataan Penduduk</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>
    <!-- Styles -->
    <style>
    body {
        font-family: 'Nunito', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #000;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .card {
        width: 400px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        padding: 20px;
        margin: 20px;
    }

    header {
        background-color: #3498db;
        padding: 20px;
        text-align: center;
        color: white;
        border-radius: 8px 8px 0 0;
    }

    h1 {
        margin: 0;
        color: black; 
        margin-bottom: 20px; 
    }

    section {
        margin-top: 20px;
    }

    h2 {
        color: #3498db;
    }

    p {
        margin-bottom: 10px;
        line-height: 1.5;
    }

    strong {
        color: #3498db;
    }

    label {
        display: inline-block;
        width: 100px; 
        margin-bottom: 5px;
    }

    input {
        width: calc(100% - 110px); 
        padding: 5px; 
    }
</style>

<body>
    <h1>Form Pendataan Penduduk</h1>
    <form method="post" action="{{ route('submit-data') }}">
        @csrf
        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik" required><br>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>
        <label for="provinsi">Provinsi:</label>
        <input type="text" id="provinsi" name="provinsi" required><br>
        <label for="kota">Kota:</label>
        <input type="text" id="kota" name="kota" required><br>
        <label for="nomor_telpon">Nomor Telepon:</label>
        <input type="tel" id="nomor_telpon" name="nomor_telpon" required><br>

        <button type="submit">Submit Data Penduduk</button>
    </form>
</body>
</html>