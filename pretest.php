<!DOCTYPE html>
<?php include("config.php"); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test - Penentuan Kategori Kelas</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <style>
   body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h1 {
    background-color: #4CAF50;
    color: white;
    padding: 10px 0;
    text-align: center;
    margin-bottom: 20px;
}

nav {
    background-color: #333;
    overflow: hidden;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    float: left;
}

nav ul li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    background-color: #111;
}

form {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form div {
    margin-bottom: 10px;
}

form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #45a049;
}
  </style>
</head>
<body>
<h1>Pretest</h1>
    <form method="get" action="pretest.php">
        <label for="level">Pilih Tingkatan Soal:</label>
        <select name="level" id="level">
            <option value="01">SD</option>
            <option value="02">SMP</option>
            <option value="03">SMA</option>
        </select>
        <input type="submit" value="Mulai">
    </form>

    <?php
    if (isset($_GET['level'])) {
        $level = $_GET['level'];
        
        // Mengambil soal dari database berdasarkan level
        $sql = "SELECT * FROM banksoal WHERE kode_soal like '____$level' ORDER BY RAND() LIMIT 5";
        $result = $conn->query($sql);
    ?>

    <form method="post" action="hasil.php">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $soal_id = $row['id_soal'];
                echo "<div>";
                echo "<p>" . $row['pertanyaan'] . "</p>";
                echo "<input type='radio' name='jawaban[$soal_id]' value='a'>" . $row['pilihan_a'] . "<br>";
                echo "<input type='radio' name='jawaban[$soal_id]' value='b'>" . $row['pilihan_b'] . "<br>";
                echo "<input type='radio' name='jawaban[$soal_id]' value='c'>" . $row['pilihan_c'] . "<br>";
                echo "<input type='radio' name='jawaban[$soal_id]' value='d'>" . $row['pilihan_d'] . "<br>";
                echo "</div>";
            }
        } else {
            echo "Tidak ada soal tersedia.";
        }
        ?>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    }
    $conn->close();
    ?>
</body>
</html>
