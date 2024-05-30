<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
header("Cache-Control: no-cache, must-revalidate");
?>
  <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php include("title.php"); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/bootstrap-filestyle.min.js"></script>
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
   .ii {
      background: #fff;
      height: 320px;   
      width: 300px;
      padding: 10px;
     }
 </style>
 
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
</head>
<body>
<?php include("nav.php"); ?>
<div class="container container-body">
   <h1>Profile</h1>
   <hr>
	<center><img class="ii" src="<?php echo $lokasi ?>" ></center>
    <h4 Style = "text-align: center;"><b>Pilih file foto (maks < 200kb)</b></h4>
   <div class="row">
     <div class="col-md-6 col-md-offset-3">
       <form class="form-horizontal" method="post" enctype="multipart/form-data">
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
                 $tgl    = date("Y-m-d");
                 $ukuran = 1024 * 200;
               if($size >= $ukuran){
                   echo '<div class="alert alert-warning">Gagal upload file. file harus < 200kb </div>';
                   exit;
                 }
                 if ($myFile["error"] !== UPLOAD_ERR_OK) {
                   echo '<div class="alert alert-warning">Gagal upload file.</div>';
                   exit;
                 }
               // filename yang aman
                 //$name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
                 $name = "profil.jpg";
                 // mencegah overwrite filename
                 
                 // upload file
                 $success = move_uploaded_file($myFile["tmp_name"],
                   UPLOAD_DIR . $name);
                 if (!$success) { 
                   echo '<div class="alert alert-warning">Gagal upload file.</div>';
                   exit;
                 }else{
                 $insert = $conn->query("INSERT INTO uploads(tgl_upload, file_name, file_size, file_type) VALUES('$tgl', '$name', '$size', '$ext')");
                   if($insert){
                     echo '<div class="alert alert-success">File berhasil di upload.</div>';
                   }else{
                     echo '<div class="alert alert-warning">Gagal upload file.</div>';
                     exit;
                   }
                 }
               // set permisi file
                 chmod(UPLOAD_DIR . $name, 0644);
               }
               ?>
           </div>
           </div>
   <hr>
   <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <?php
        $sql = $conn->query("SELECT * FROM user WHERE username='{$_SESSION['user']}'");
        $data = $sql->fetch_assoc();
        $lokasi ='./uploads/'.$data['username'].'/profil.jpg';
        ?>
        <table class="table">
            <tr>
                <th>NAMA LENGKAP</th><th>:</th><td><?php echo $data['nama']; ?></td>
            </tr>
            <tr>
                <th>USERNAME</th><th>:</th><td><?php echo $data['username']; ?></td>
            </tr>
            <tr>
                <th>TGL. DAFTAR</th><th>:</th><td><?php echo $data['tgl_daftar']; ?></td>
            </tr>
            <tr>
                <th>STATUS</th><th>:</th><td><?php echo $data['level'] == 'guru' ? 'Guru' : 'Murid'; ?></td>
            </tr>
            <?php if ($data['level'] == 'murid') { ?>
            <tr>
                <th>JENJANG PENDIDIKAN</th><th>:</th><td><?php echo $data['jenjang']; ?></td>
            </tr>
            <tr>
                <th>TINGKATAN</th><th>:</th><td><?php echo $data['grade']; ?></td>
            </tr>
            <tr>
                <th>KATEGORI</th><th>:</th><td><?php echo isset($data['kategori']) ? $data['kategori'] : 'Belum ditentukan'; ?></td>
            </tr>
            <?php } ?>
            <tr>
                <th>PASSWORD</th><th>:</th><td><a href="ubahpassword.php">Ubah password</a></td>
            </tr>
        </table>
    </div>
</div>

   <hr>
   <div class="footer">
		<h4>---Pacitan 2024---</h4>
	</div>
 </div>
</body>
</html>
