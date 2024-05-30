<?php
include 'config.php';

$jawaban_user = isset($_POST['jawaban']) ? $_POST['jawaban'] : [];
$total_benar = 0;
$total_soal = 0;

$sql = "SELECT id_soal FROM banksoal";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $total_soal = $result->num_rows;
}

foreach ($jawaban_user as $id_soal => $jawaban) {
    $sql = "SELECT jawaban_benar FROM banksoal WHERE id_soal = $id_soal";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    if ($row['jawaban_benar'] == $jawaban) {
        $total_benar++;
    }
}

$soal_terjawab = count($jawaban_user);
$soal_tidak_terjawab = $total_soal - $soal_terjawab;

$skor = ($total_benar / $total_soal) * 100;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pretest</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Hasil Pretest</h1>
    <p>Jawaban Benar: <?php echo $total_benar; ?></p>
    <p>Soal Terjawab: <?php echo $soal_terjawab; ?></p>
    <p>Soal Tidak Terjawab: <?php echo $soal_tidak_terjawab; ?></p>
    <p>Total Soal: <?php echo $total_soal; ?></p>
    <p>Skor: <?php echo $skor; ?></p>
</body>
</html>

<?php
$conn->close();
?>