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
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
</head>
<body>
<?php include("nav.php"); ?>
 <div class="container container-body">
   <h1>Login</h1>
   <center><h5><b>Note : Jika login bermasalah coba disable antivirus atau sejenisnya</b></h5></center>
   <hr>
   <div class="row">
     <div class="col-md-4 col-md-offset-4">
       <?php
       if($_POST['login']){
         $user   = $conn->real_escape_string($_POST['username']);
         $pass   = md5($conn->real_escape_string($_POST['password']));
         $sql = $conn->query("SELECT * FROM user WHERE username='$user' AND password='$pass'");
         if($sql->num_rows > 0){
           $_SESSION['user'] = $user;
           header("Location: profile.php");
           ?>
           <script>
               window.location = 'index.php';
           </script>
           <?php
         }else{
           echo '<div class="alert alert-danger">Login gagal.</div>';
         }
       }
       ?>
       <form class="form-horizontal" method="post">
         <div class="form-group">
           <label class="col-md-4 control-label">Username</label>
           <div class="col-md-8">
             <input type="text" name="username" class="form-control" placeholder="username">
           </div>
         </div>
         <div class="form-group">
           <label class="col-md-4 control-label">Password</label>
           <div class="col-md-8">
             <input type="password" name="password" class="form-control" placeholder="password">
           </div>
         </div>
         <div class="form-group">
           <label class="col-md-4 control-label">&nbsp;</label>
           <div class="col-md-8">
             <input type="submit" name="login" class="btn btn-primary" value="Login">
           </div>
         </div>
         <div class="form-group">
           <label class="col-md-4 control-label">&nbsp;</label>
           <div class="col-md-8">
             Belum punya akun? <a href="register.php">Register</a>
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
</body>
</html>