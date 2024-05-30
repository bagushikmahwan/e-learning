<?php include("config.php"); error_reporting(0); ?>
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
</style>
</head>
<body>
<?php include("nav.php"); ?>
<div class="container container-body">
 <h1>Register</h1>
 <hr>
 <div class="row">
   <div class="col-md-6 col-md-offset-3">
 <?php
     if($_POST['register']){
       $nama   = $conn->real_escape_string($_POST['nama']);
       $level  = $conn->real_escape_string($_POST['level']);
       $nip    = $conn->real_escape_string($_POST['nip']);
       $nisn   = $conn->real_escape_string($_POST['nisn']);
       $jenjang = $conn->real_escape_string($_POST['jenjang']);
       $grade  = $conn->real_escape_string($_POST['grade']);
       $kelas  = $conn->real_escape_string($_POST['kelas']);
       $kelas_paud  = $conn->real_escape_string($_POST['kelas_paud']);
       $kelas_tk  = $conn->real_escape_string($_POST['kelas_tk']);
       $kelas_sd  = $conn->real_escape_string($_POST['kelas_sd']);
       $kelas_smp  = $conn->real_escape_string($_POST['kelas_smp']);
       $kelas_sma  = $conn->real_escape_string($_POST['kelas_sma']);
       $user   = $conn->real_escape_string($_POST['username']);
       $email  = $conn->real_escape_string($_POST['email']);
       $pass   = $conn->real_escape_string($_POST['password']);
       $pass2  = $conn->real_escape_string($_POST['password2']);
       $tgl    = date("Y-m-d");
       date_default_timezone_set('Asia/Jakarta');
         if($pass == $pass2){

           $password = md5($pass);
           
           $insert = $conn->query("INSERT INTO user(tgl_daftar, nama, level, nip, nisn, jenjang, grade , username, email, password) VALUES('$tgl', '$nama', '$level', '$nip', '$nisn', '$jenjang', '$grade', '$user', '$email', '$password')");
           
           if($insert){
             echo '<div class="alert alert-success">Register berhasil, silahkan <a href="login.php">Login</a>.</div>';
             
             // Membuat folder dengan nama username
             $userDir = "uploads/".$user;
             if (!file_exists($userDir)) {
                 if (mkdir($userDir, 0777, true)) {
                     // Copy file profil.jpg dari folder images ke folder user
                     $source = "images/profil.jpg";
                     $destination = $userDir . "/profil.jpg";
                     if (!copy($source, $destination)) {
                         echo '<div class="alert alert-danger">Gagal menyalin file profil.jpg ke folder user.</div>';
                     }
                 } else {
                     echo '<div class="alert alert-danger">Gagal membuat folder: ' . $userDir . '</div>';
                 }
             }
             
           } else {
             echo '<div class="alert alert-danger">Gagal melakukan Register.</div>';
           }
         } else {
           echo '<div class="alert alert-danger">Konfirmasi password tidak sesuai.</div>';
         }
     }




     ?>
     <form class="form-horizontal" method="post">
       <div class="form-group">
         <label class="col-md-4 control-label">Nama Lengkap</label>
         <div class="col-md-8">
           <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Sesuai KTP / KK" required="required">
         </div>
       </div>
       <div class="form-group">
         <label class="col-md-4 control-label">Level</label>
         <div class="col-md-8">
           <input type="radio" name="level" id="level_guru" required="required" value="guru"> Guru
           <input type="radio" name="level" id="level_murid" required="required" value="murid"> Murid
         </div>
       </div>
       <div class="form-group">
         <label class="col-md-4 control-label">Username</label>
         <div class="col-md-8">
           <input type="text" name="username" class="form-control" placeholder="User yg digunakan untuk login" required="required">
         </div>
       </div>
       <div class="form-group">
         <label class="col-md-4 control-label">Email</label>
         <div class="col-md-8">
           <input type="email" name="email" class="form-control" placeholder="Masukkan alamat email yang valid" required="required">
         </div>
       </div>
       <div class="form-group">
         <label class="col-md-4 control-label">NIP (Guru)</label>
         <div class="col-md-8">
           <input type="text" name="nip" id="nip" class="form-control" placeholder="" required="required" disabled>
         </div>
       </div> 
       <div class="form-group">
         <label class="col-md-4 control-label">NISN (Murid)</label>
         <div class="col-md-8">
           <input type="text" name="nisn" id="nisn" class="form-control" placeholder="" required="required" disabled>
         </div>
       </div> 
       <div class="form-group">
         <label class="col-md-4 control-label">Jenjang</label>
         <div class="col-md-8">
           <input type="radio" name="jenjang" id="jenjang_sd" required="required" value="sd"> SD
           <input type="radio" name="jenjang" id="jenjang_smp" required="required" value="smp"> SMP
           <input type="radio" name="jenjang" id="jenjang_sma" required="required" value="sma"> SMA
         </div>
       </div>
         <div class="form-group">
         <label class="col-md-4 control-label">Kelas (SD)</label>
         <div class="col-md-8">
           <select name="grade" id="gradejssd" class="form-control" placeholder="." required="required" disabled>
          <option value="" disabled selected>Pilih Kelas</option>
             <option value="I">I</option>
             <option value="II">II</option>
             <option value="III">III</option>
             <option value="IV">IV</option>
             <option value="V">V</option>
             <option value="VI">VI</option>
           </select>
         </div>
       </div>
       <div class="form-group">
         <label class="col-md-4 control-label">Kelas (SMP)</label>
         <div class="col-md-8">
           <select name="grade" id="gradejssmp" class="form-control" placeholder="." required="required" disabled>
          <option value="" disabled selected>Pilih Kelas</option>
             <option value="VII">VII</option>
             <option value="VIII">VIII</option>
             <option value="IX">IX</option>
           </select>
         </div>
       </div>
       <div class="form-group">
         <label class="col-md-4 control-label">Kelas (SMA)</label>
         <div class="col-md-8">
           <select name="grade" id="gradejssma" class="form-control" placeholder="." required="required" disabled>
           <option value="" disabled selected>Pilih Kelas</option> 
             <optgroup label="X">
               <option value="X IPA">X IPA</option>
               <option value="X IPS">X IPS</option>
             </optgroup>
             <optgroup label="XI">
               <option value="XI IPA">XI IPA</option>
               <option value="XI IPS">XI IPS</option>
             </optgroup>
             <optgroup label="XII">
               <option value="XII IPA">XII IPA</option>
               <option value="XII IPS">XII IPS</option>
             </optgroup>
           </select>
         </div>
       </div>
       <div class="form-group">
         <label class="col-md-4 control-label">Password</label>
         <div class="col-md-8">
           <input type="password" name="password" class="form-control" placeholder="password yg mudah diingat" required="required">
         </div>
       </div>
       <div class="form-group">
         <label class="col-md-4 control-label">Ulangi Password</label>
         <div class="col-md-8">
           <input type="password" name="password2" class="form-control" placeholder="ulangi password" required="required">
         </div>
       </div>
       <div class="form-group">
         <label class="col-md-4 control-label">&nbsp;</label>
         <div class="col-md-8">
           <input type="submit" name="register" class="btn btn-primary" value="Register">
         </div>
       </div>
       <div class="form-group">
         <label class="col-md-4 control-label">&nbsp;</label>
         <div class="col-md-8">
           Sudah punya akun? <a href="login.php">Login</a>
         </div>
       </div>
     </form>
   </div>
 </div>
 <hr>
 <div class="footer">
   <h4>---Pacitan 2024---</h4>
 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('input[name="level"]').click(function(){
    if($(this).val() == "guru"){
      $("#nip").removeAttr("disabled");
      $("#nisn").prop("disabled", true);
      $("#jenjang_sd, #jenjang_smp, #jenjang_sma").prop("disabled", true);
      $("#gradejssd, #gradejssmp, #gradejssma").prop("disabled", true).val("");
    }
    if($(this).val() == "murid"){
      $("#nisn").removeAttr("disabled");
      $("#nip").prop("disabled", true);
    }
  });
  $('input[name="jenjang"]').click(function(){
    var jenjang = $(this).val();
    $("#gradejssd, #gradejssmp, #gradejssma").prop("disabled", true).val("");
    if(jenjang == "sd"){
      $("#gradejssd").removeAttr("disabled");
    } else if(jenjang == "smp"){
      $("#gradejssmp").removeAttr("disabled");
    } else if(jenjang == "sma"){
      $("#gradejssma").removeAttr("disabled");
    }
  });

});

</script>
</body>
</html>
