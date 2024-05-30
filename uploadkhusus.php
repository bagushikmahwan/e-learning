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
 <h1>Upload</h1>
 <hr>
 <?php
   echo "<h4><center><b>Anda login sebagai : ".$_SESSION['user']."</b></center><br></h4>" ;
   if($_SESSION['user']!="bagus2"){
   echo '<div class="alert alert-danger">Anda harus login sebagai admin untuk membuka halaman ini.</div>';
 }else{
 ?>
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
     define("UPLOAD_DIR", "uploads/filekuliah/");
 if (!empty($_FILES["myFile"])) {
       $myFile = $_FILES["myFile"];
       $ext    = pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
       $size   = $_FILES["myFile"]["size"];
       date_default_timezone_set('Asia/Jakarta');
       $tgl   = date("Y-m-d H:i:s");
       $ukuran = 1024 * 20000;
   if($size >= $ukuran){
         echo '<div class="alert alert-warning">Gagal upload file. file harus < 2mb </div>';
         exit;
       }
       if ($myFile["error"] !== UPLOAD_ERR_OK) {
         echo '<div class="alert alert-warning">Gagal upload file.</div>';
         exit;
       }
   // filename yang aman
       $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
   // mencegah overwrite filename
       $i = 0;
       $parts = pathinfo($name);
       while (file_exists(UPLOAD_DIR . $name)) {
         $i++;
         $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
       }
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