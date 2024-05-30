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
   display:table;
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
 <h1>Download</h1>
 <hr>
 <?php
 if(!$_SESSION['user']){
   echo '<div class="alert alert-danger">Anda harus login untuk membuka halaman ini.</div>';
 }else{
   function bytesToSize($bytes, $precision = 2){  
     $kilobyte = 1024;
     $megabyte = $kilobyte * 1024;
     $gigabyte = $megabyte * 1024;
     $terabyte = $gigabyte * 1024;
    
     if (($bytes >= 0) && ($bytes < $kilobyte)) {
       return $bytes . ' B';
     } elseif (($bytes >= $kilobyte) && ($bytes < $megabyte)) {
       return round($bytes / $kilobyte, $precision) . ' KB';
     } elseif (($bytes >= $megabyte) && ($bytes < $gigabyte)) {
       return round($bytes / $megabyte, $precision) . ' MB';
     } elseif (($bytes >= $gigabyte) && ($bytes < $terabyte)) {
       return round($bytes / $gigabyte, $precision) . ' GB';
     } elseif ($bytes >= $terabyte) {
       return round($bytes / $terabyte, $precision) . ' TB';
     } else {
       return $bytes . ' B';
     }
   }
 ?>
	<table class="table table-striped table-hover">
	<tr>
     <th>NO.</th>
     <th>NAMA FILE</th>
     <th>UKURAN FILE</th>
     <th>TIPE FILE</th>
		<th>DIUPLOAD</th>
		<th>PILIHAN</th>
   </tr>
 <?php
 
 $sql = $conn->query("SELECT * FROM user WHERE username='{$_SESSION['user']}'");
 $data = $sql->fetch_assoc();
 date_default_timezone_set('Asia/Jakarta');
		$dir='./uploads/'.$data['username'].'/';
		//echo '<h4><b>Daftar file dari folder ',$dir,'</b></h4>';
		echo '<h4><b>Daftar file '.$data['username'].'</b></h4>';
		$dh=opendir($dir) or die('<div class="alert alert-warning">User anda telah terblokir.</div>');
		$no=1;
		$f=readdir($dh);
		//while(($f=readdir($dh)) !== false){		
		chdir($dir); 			// penentuan folder change dir
		array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_DESC, $files);
			foreach($files as $filename){				
				echo '
				<tr>
					<td>'.$no.'</td>
					<td><a href="',$dir.$filename,'">', $filename, '</a></td>
					<!-- bisa pake ini <td>'.number_format(filesize($filename)/1024,0,',','.').' KB</td>-->
					<td>'.bytesToSize(filesize($filename)).'</td>
					<td>'.pathinfo($filename,PATHINFO_EXTENSION).'</td>
					<td>'.date("H:i:s / d-F-Y.",filemtime($filename)).'</td>
					<td><a href="hapus.php?id='.$filename.'&lokasi='.$dir.$filename.'&prak='.$filename.'&ext=.'.pathinfo($filename,PATHINFO_EXTENSION).'"><button style="border-radius: 2px;">HAPUS</button></a> </td>
				</tr>';
				$no++;
			}		
		//}
		closedir($dh);
		/*
	  $sql = $conn->query("SELECT * FROM uploads ORDER BY id DESC");
   if($sql->num_rows > 0){
     $no = 1;
     while($row = $sql->fetch_assoc()){
       echo '
       <tr>
         <td>'.$no.'</td>
         <td>'.$row['file_name'].'</td>
         <td>'.bytesToSize($row['file_size']).'</td>
         <td>'.$row['file_type'].'</td>
         <td><a href="uploads/'.$row['file_name'].'" class="btn btn-primary btn-sm">Download</a></td>
       </tr>
       ';
       $no++;
     }
   }else{
     echo '<tr><td colspan="5">Tidak ada data</td></tr>';
   }
		 //PDF VIEWER
		error_reporting(0); 
		require_once 'excelviewer/excel_reader2.php';
		$data = new Spreadsheet_Excel_Reader("Book1.xls"); 
		echo $data;
			*/
	  ?>
	  </table>
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