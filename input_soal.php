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
      justify-content: center;
      align-items: center;
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
 <center><h1>Input Soal</h1>

    <form method="post" action="proses_input_soal.php">
        <div>
            <label for="pertanyaan">Pertanyaan:</label><br>
            <textarea id="pertanyaan" name="pertanyaan" rows="4" cols="50" required></textarea>
        </div>
        <div>
            <label for="pilihan_a">Pilihan A:</label><br>
            <input type="text" id="pilihan_a" name="pilihan_a" required>
        </div>
        <div>
            <label for="pilihan_b">Pilihan B:</label><br>
            <input type="text" id="pilihan_b" name="pilihan_b" required>
        </div>
        <div>
            <label for="pilihan_c">Pilihan C:</label><br>
            <input type="text" id="pilihan_c" name="pilihan_c" required>
        </div>
        <div>
            <label for="pilihan_d">Pilihan D:</label><br>
            <input type="text" id="pilihan_d" name="pilihan_d" required>
        </div>
        <div>
            <label for="jawaban_benar">Jawaban Benar:</label><br>
            <select id="jawaban_benar" name="jawaban_benar" required>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
            </select>
        </div>
        <div>
            <label for="level">Tingkatan :</label><br>
            <select id="level" name="level" required>
                <option value="01">SD</option>
                <option value="02">SMP</option>
                <option value="03">SMA</option>
            </select>
        </div>
        <br>
        <input type="submit" value="Simpan">
    </form>
</center>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>




<!DOCTYPE html>
<html>
<head>
    <title>Input Soal</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    
</body>
</html>