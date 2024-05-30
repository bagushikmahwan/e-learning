<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include("title.php"); ?>
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
	.footer{
		width: 100%;
		padding: 10 px;
		text-align: center;
	}
	.i {
       background: #fff;
       border-radius: 50%;
       display: inline-block;
       height: 20px;   
       width: 20px;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-filestyle.min.js"></script>
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<?php include("nav.php"); ?>
  <div class="container container-body">
    <h1>Upload Laporan</h1>
    <hr>
    <h4>Upload laporan praktikum maks hari minggu, 1 minggu setelah praktikum dimulai </h4>
    <hr>
    <?php
    if(!$_SESSION['user']){
      echo '<div class="alert alert-danger">Anda harus login untuk membuka halaman ini.</div>';
    }else{
    ?>
	<br>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
            <center><h3><b>Praktikum ke  :</b><input type="number" value="1" max="32" min="1" name="prak"></h3></center>
          <div class="form-group">
            <div class="col-md-10">
              <input type="file" name="myFile" class="filestyle" data-icon="false">
            </div>
            <div class="col-md-2">
              <input type="submit" name="upload" class="btn btn-primary" value="Upload">
            </div>
          </div>
        </form>
        <?php
  			$sql = $conn->query("SELECT * FROM user WHERE username='{$_SESSION['user']}'");
  			$data = $sql->fetch_assoc();
       // definisi folder upload
        define("UPLOAD_DIR", "uploads/".$data['username']."/");
        if (!empty($_FILES["myFile"])) {
          $myFile = $_FILES["myFile"];
          $ext    = pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
          $size   = $_FILES["myFile"]["size"];
          date_default_timezone_set('Asia/Jakarta');
          $tgl   = date("Y-m-d H:i:s");
          $ukuran = 1024 * 2000;
          if($size >= $ukuran){
            echo '<div class="alert alert-warning">Gagal upload file. file harus < 2mb </div>';
            exit;
          }
          if ($myFile["error"] !== UPLOAD_ERR_OK) {
            echo '<div class="alert alert-warning">Gagal upload file.</div>';
            exit;
          }
          // filename yang aman
          //$name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
          $praktikum=$_POST['prak'];        
          $name = "praktikum_$praktikum.$ext";
          // mencegah overwrite filename
        //   $i = 0;
        //   $parts = pathinfo($name);
        //   while (file_exists(UPLOAD_DIR . $name)) {
        //     $i++;
        //     $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
        //   }
            if(file_exists(UPLOAD_DIR . $name)) {
                echo '<div class="alert alert-warning">Gagal upload file. File '.$name.' sudah diupload </div>';
                exit;
            }
          // upload file
          $success = move_uploaded_file($myFile["tmp_name"],
            UPLOAD_DIR . $name);
          if (!$success) { 
            echo '<div class="alert alert-warning">Gagal upload file.</div>';
            exit;
          }else{
            if(isset($_POST['prak']) && $_POST['prak']>0 && $_POST['prak']<33) {
              $nama = $data['username'];
              $insert = $conn->query("INSERT INTO uploads(tgl_upload, file_name, file_size, file_type, nama) VALUES('$tgl', '$name', '$size', '$ext', '$nama')");              
              $kelas=$data['kelas'];           
              if($kelas=="1 TI A"){
                $kelas = "laporana";
              }else if($kelas=="1 TI B"){
                $kelas = "laporanb";
              }else if($kelas=="1 TI C"){
                $kelas = "laporanc";
              }
              $namalengkap=$data['nama'];
              $namauntukdeadline = str_replace(".$ext","",$name);
              $deadline = $conn->query("SELECT * FROM praktikum WHERE nama='$namauntukdeadline'");
              $datadeadline = $deadline->fetch_assoc();
              if($tgl>=$datadeadline['deadline']){
                $update = $conn->query("UPDATE $kelas set $kelas.$praktikum=2 where nama='$namalengkap'");
              }else{
                $update = $conn->query("UPDATE $kelas set $kelas.$praktikum=1 where nama='$namalengkap'");
              }
              if($insert){
                echo '<div class="alert alert-success">File berhasil di upload.</div>'. $tgl;                              
              }else{
                echo '<div class="alert alert-warning">Gagal upload file.</div>';
                exit;
              }
            } else {
              echo '<div class="alert alert-warning">Upload hanya praktikum 1 sampai 32 </div>';
                exit;
            }        
          }
          // set permisi file
          chmod(UPLOAD_DIR . $name, 0644);
        }
        ?>
      </div>
    </div>
    <?php
    }
    ?>
    <hr>
    <div class="footer">
	<h4>---Pacitan 2017---</h4>
	</div>
  </div>
</body>
</html>