<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data nilai matkul dari form
    $nilai_mk = [];
    $counter = 1;

    while (isset($_POST['nilai_mk' . $counter])) {
        $nilai_mk[] = intval($_POST['nilai_mk' . $counter]);  // Konversi ke bilangan bulat (Dibuat agar nilai_mk dapat dihitung) 
        $counter++;
    }

    // Cek apabila nilai_mk dibawah 60
    $nilai_mk_dibawah_60 = false;
    foreach ($nilai_mk as $nilai) {
        if ($nilai < 60) {
            $nilai_mk_dibawah_60 = true;
            break;
        }
    }

    // Menghitung Rata-rata
    $jumlah_mk = count($nilai_mk);
    $total_nilai = array_sum($nilai_mk);
    $rata_rata = $jumlah_mk > 0 ? ($total_nilai / $jumlah_mk) * 4.00 / 100 : 0;

    // Batasi IPK hingga 4,00
    $ipk = min($rata_rata, 4.00);

    // Menentukan Status Kelulusan
    $status_kelulusan = $nilai_mk_dibawah_60 ? "Tidak Lulus (Selamat Mengulang!)" : "Lulus (Hoki..)";

    // Menampilkan Hasil
    echo "<h2>Hasil Perhitungan IPK dan Status Kelulusan:</h2>";
    echo "<p>IPK: $ipk</p>";
    echo "<p>Status Kelulusan: $status_kelulusan</p>";

    // Tombol return untuk kembali ke halaman sebelumnya
    echo '<a href="index1.html">Return</a>';
}
?>
