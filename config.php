<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bantuan Sosial</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Data Penerima Bantuan Sosial</h1>
  </header>
  <div class="center" style="float: center;">
      <?php
       extract($_REQUEST);
       $file=fopen("form-save.txt","a");
        fwrite($file,"Nama Lengkap : ");
        fwrite($file, $nama ."\n");
        fwrite($file,"NIK : ");
        fwrite($file, $nik ."\n");
        fwrite($file,"Alamat : ");
        fwrite($file, $alamat ."\n");
        fwrite($file,"No HP : ");
        fwrite($file, $hp ."\n");
        fwrite($file,"-----------------\n");
        fclose($file);
        echo"<pre>";
        include("form-save.txt");
      ?>
      <form class="form" name="form2" method="get" action="index.php">
      <label><input type="submit" name="btn" id="submit-btn" value="Kembali" style="align: center;"></label>
    </form>
    <h4>2000018280<br>Muhammad Farkhan Maulana</h4>
  </div>
</body>
</html>