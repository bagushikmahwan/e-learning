<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pertanyaan = $_POST['pertanyaan'];
    $pilihan_a = $_POST['pilihan_a'];
    $pilihan_b = $_POST['pilihan_b'];
    $pilihan_c = $_POST['pilihan_c'];
    $pilihan_d = $_POST['pilihan_d'];
    $jawaban_benar = $_POST['jawaban_benar'];
    $level = $_POST['level'];
    $tahun = date('Y');

    $sql = "INSERT INTO banksoal (pertanyaan, pilihan_a, pilihan_b, pilihan_c, pilihan_d, jawaban_benar, kode_soal) 
            VALUES ('$pertanyaan', '$pilihan_a', '$pilihan_b', '$pilihan_c', '$pilihan_d', '$jawaban_benar', '$tahun$level')";

    if ($conn->query($sql) === TRUE) {
        echo "Soal berhasil disimpan. <a href='input_soal.php'>Input Soal Lagi</a> atau <a href='index.php'>Kembali ke Home</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Metode pengiriman tidak valid.";
}
?>