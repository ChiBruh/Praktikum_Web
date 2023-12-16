<!-- resources/views/dashboardKasir.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">
    <style>
    /* Existing styles remain unchanged */

    body {
        font-family: 'Nunito', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: blade; /* Change the text color to red */
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

</style>
</head>
<body>
    <section>
        <h2>Detail Pemesanan:</h2>
        <p><strong>NIK:</strong> {{ $data['nik'] }}</p> 
        <p><strong>Nama:</strong> {{ $data['nama'] }}</p>
        <p><strong>Provinsi:</strong> {{ $data['provinsi'] }}</p>
        <p><strong>Kota:</strong> {{ $data['kota'] }}</p>
        <p><strong>Nomor Telepon:</strong> {{ $data['nomor_telpon'] }}</p>
    </section>
    <button onclick="window.history.back()">Return</button>
</body>
</html>
