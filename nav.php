<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" >E-Learning</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Halaman Utama</a></li>
        <?php if(isset($_SESSION['user'])): ?>
          <?php
            // Query untuk mendapatkan kategori pengguna saat ini
            $query_kategori = "SELECT * FROM user WHERE username = '{$_SESSION['user']}'";
            $result_kategori = $conn->query($query_kategori);
            $data_kategori = $result_kategori->fetch_assoc();
            $kategori = $data_kategori['kategori'];
            $level = $data_kategori['level'];
            // Jika pengguna belum memiliki kategori, sembunyikan fitur upload laporan, lihat laporan, dan file kuliah
            if ($level == 'murid') {
              echo '<li><a href="halamanawalpretest.php">Ikuti Pre-Test</a></li>';
              echo '<li><a href="upload.php">Upload Laporan</a></li>';
              echo '<li><a href="download.php">Lihat Laporan</a></li>';
            } else if ($level == 'guru') {
              echo '<li><a href="input_soal.php">Input Soal</a></li>';
              echo '<li><a href="filekuliah.php">File Kuliah</a></li>';
            } else {
              //guest user
            }
          ?>
        <?php endif; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <?php
            $sql = $conn->query("SELECT * FROM user WHERE username='{$_SESSION['user']}'");
            $data = $sql->fetch_assoc();
            $lokasi ='./uploads/'.$data['username'].'/profil.jpg';
          ?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo $lokasi ?>" class="i profile-image img-circle">
            <?php
              $sql = $conn->query("SELECT * FROM user WHERE username='{$_SESSION['user']}'");
              $data = $sql->fetch_assoc();
              if(isset($_SESSION['user'])){
                echo $data['username'];
              }else{
                echo "Guest";
              }
            ?>
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <?php
              if(isset($_SESSION['user'])){
                echo '<li><a href="profile.php">Profile</a></li>';
                echo '<li class="divider"></li>';
                echo '<li><a href="logout.php" onclick="return confirm(\'Yakin?\')">Logout</a></li>';
              } elseif ($level == 'guru') {
                echo '<li><a href="input_soal.php">Input Soal</a></li>';
              }else{
                echo '<li><a href="login.php">Login</a></li>';
              }
            ?>
          </ul>
        </li>
        <li><a href="http://aknpacitan.ac.id" target="_blank">Visit AKN Pacitan</a></li>
      </ul>
    </div>
  </div>
</nav>