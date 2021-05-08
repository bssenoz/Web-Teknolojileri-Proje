<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Giriş</title>
    <link href="css/login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar bg-dark navbar-expand-sm navbar-dark fixed-top">
    <div class="container">
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li><a href="index.html">Anasayfa</a></li>
          <li><a href="ozgecmis.html">Özgeçmiş</a></li>
           <li><a href="hakkimda.html">İlgi Alanlarım</a></li>
          <li><a href="sehrim.html">Şehrim</a></li>
          <li><a href="mirasimiz.html">Mirasımız</a></li>
          <li><a href="iletisim.html">İletişim</a></li>
        </ul>
      </div>
      <li style="float:right;"><a href="login.html">Giriş</a></li>
    </div>
  </nav>

<div align="center">
  <div class="card text-white bg-dark mb-3" style="max-width: 40rem;padding:10px 10px;margin-top:35vh;">
  <?php if($_POST["email"]=="a@a.com" && $_POST["password"]==123456)
			{
        echo"Merhaba ".$_POST["email"];
        echo"<br>Girişin Onaylandı.";
      }
      else{
        echo "Kullanıcı e postası ya da şifre hatalı!";
        header("refresh:2; login.html");
      }    
        ?>
  </div>
</div>

    

   

</body>

</html>