<?php 
include("config.php"); 
   //include("excel_reader2.php");
    //$excel = new Spreadsheet_Excel_Reader("example.xls");
    //$excel2 = new Spreadsheet_Excel_Reader("example2.xls"); 
// Query to get the count of teachers (assuming 'level' indicates roles)
$query_guru = "SELECT COUNT(*) AS count FROM user WHERE level = 'guru'";
$result_guru = $conn->query($query_guru);
$data_teachers = $result_guru->fetch_assoc();
$teacher_count = $data_teachers['count'];

// Query to get the count of students
$query_students = "SELECT COUNT(*) AS count FROM user WHERE level = 'murid'";
$result_students = $conn->query($query_students);
$data_students = $result_students->fetch_assoc();
$student_count = $data_students['count'];

// Debugging output
// echo "Teacher Count: $teacher_count<br>";
// echo "Student Count: $student_count<br>";
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include("title.php"); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    body {
      padding-top: 70px;
      background: #eeeeee;
    }
    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
    }
    .footer {
      width: 100%;
      padding: 10px;
      text-align: center;
    }
    .i {
      background: #fff;
      border-radius: 50%;
      display: inline-block;
      height: 20px;
      width: 20px;
    }
    #jam-digital {
      overflow: hidden;
      width: 310px;
      text-align: center;
    }
    #hours {
      float: left;
      width: 100px;
      height: 50px;
      background-color: #6B9AB8;
      margin-right: 5px;
    }
    #minute {
      float: left;
      width: 100px;
      height: 50px;
      background-color: #A5B1CB;
    }
    #second {
      float: right;
      width: 100px;
      height: 50px;
      background-color: #FF618A;
      margin-left: 5px;
    }
    #jam-digital p {
      color: #FFF;
      font-size: 36px;
      text-align: center;
      margin-top: 4px;
    }
  </style>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <?php include("nav.php"); ?>
  <div class="container container-body" style="display:table">
    <div class="row">
      <div class="col-lg-4">
        <?php
          $sql = $conn->query("SELECT * FROM user WHERE username='{$_SESSION['user']}'");
          $data = $sql->fetch_assoc();
        ?>
        <h2 style="text-align:center;">Selamat datang!<br>
        <?php
          if(isset($_SESSION['user'])){
            echo $data['username'];
          }else{
            echo "Guest user";
          }
        ?>
        </h2>
        <h3>Sekarang pukul : </h3>
        <div id="jam-digital">
          <div id="hours"><p id="jam"></p></div>
          <div id="minute"><p id="menit"></p></div>
          <div id="second"><p id="detik"></p></div>
        </div>
        <hr>
        <ul>
          <?php
            if(isset($_SESSION['user'])){
              echo '<li><h3><a href="profile.php">Profile</a></h3></li>';
              echo '<li><h3><a href="logout.php" onclick="return confirm(\'Yakin?\')">Logout</a></h3></li>';
            }else{
              echo '<li><h3><a href="login.php">Login</a></h3></li>';
              echo '<li><h3><a href="register.php">Register</a></h3></li>';
            }
          ?>
        </ul>
      </div>
      <div class="col-lg-8">
      <hr>
        <div class="card">
        <div class="card-body">
    <h4 class="card-title"><b>Ini adalah dashboard dari E-Learning berdiferensiasi yang secara khusus dibuat untuk pembelajaran yang dibedakan dalam satu waktu yang sama.</b></h4>
    <br><br>
    <?php
// Query untuk mendapatkan kategori pengguna saat ini
if(isset($_SESSION['user'])){
  $query_kategori = "SELECT kategori FROM user WHERE username = '{$_SESSION['user']}'";
  $result_kategori = $conn->query($query_kategori);
  $data_kategori = $result_kategori->fetch_assoc();
  $kategori = $data_kategori['kategori'];

  // Jika pengguna belum memiliki kategori, tampilkan tautan ke pre-test
  if (!$kategori) {
    echo '<p class="card-text">Ikuti pre-test untuk menentukan kategori anda di kelas <a href="halamanawalpretest.php">disini!</a></p>';
    echo '<p class="card-text text-warning">Anda belum memiliki kategori, maka belum bisa mengunduh modul praktikum. Silakan ikuti pre-test terlebih dahulu!</p>';
  } else {
    // Jika pengguna sudah memiliki kategori, tampilkan notifikasi bahwa pre-test sudah tidak dapat dikerjakan lagi
    echo '<p class="card-text text-warning">Anda sudah memiliki kategori dan tidak bisa mengikuti pre-test lagi.</p>';
    // Tampilkan tautan untuk download modul praktikum
    echo '<p class="card-text">Download Modul Praktikum <a href="filekuliah.php">disini!</a></p>';
  }
} else {
  // Jika pengguna belum login, tampilkan pesan bahwa harus login/register dulu
  echo '<p class="card-text text-warning">Anda harus login/register dulu untuk mengakses fitur-fitur yang ada.</p>';
}
?>
</div>
        <hr>
        <!-- Place the Chart.js canvas here -->
        <h3>Jumlah Guru dan Murid</h3>
        <canvas id="myChart"></canvas>
        
        <script>
          var ctx = document.getElementById('myChart').getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ['Guru', 'Murid'],
              datasets: [{
                label: '# of Users',
                data: [<?php echo $teacher_count; ?>, <?php echo $student_count; ?>],
                backgroundColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        </script>
        
        
    <br>
    <div class="footer">
      <h4>---Pacitan 2024---</h4>
    </div>      
  </div>
  <script type="text/javascript">
    window.setTimeout("waktu()", 1000);
    function waktu() {
      var tanggal = new Date();
      setTimeout("waktu()", 1000);
      document.getElementById("jam").innerHTML = tanggal.getHours();
      document.getElementById("menit").innerHTML = tanggal.getMinutes();
      document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }
  </script>
</body>
</html>
