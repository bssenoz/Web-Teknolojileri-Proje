<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>İletişim</title>
  <link href="css/iletisim.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar bg-dark navbar-expand-sm navbar-dark fixed-top">
    <div class="container">
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li><a href="index.html">Anasayfa</a></li>
          <li><a href="hakkımda.html">İlgi Alanlarım</a></li>
          <li><a href="ozgecmis.html">Özgeçmiş</a></li>
          <li><a href="sehrim.html">Şehrim</a></li>
          <li><a href="mirasimiz.html">Mirasımız</a></li>
          <li><a href="iletisim.html">İletişim</a></li>
        </ul>
      </div>
      <li style="float:right;"><a href="login.html">Giriş</a></li>
    </div>
  </nav>

  <div align="center" style="margin-top:30vh;">
  <div class="card text-white bg-dark mb-3" style="max-width: 25rem;padding:10px 10px;margin-top:10%;">
  <table class="text-center table table-dark">
                        <tr>
                        <th>İsim: </th>
                        <td><?php echo $_POST["isim"]; ?></td>
                        </tr>
                        <tr>
                        <th>Soyisim: </th>
                        <td><?php echo $_POST["soyisim"]; ?></td>
                        </tr>
                        <tr>
                        <th>E-Mail: </th>
                        <td><?php echo $_POST["email"]; ?></td>
                        </tr>
                        <tr>
                        <th>Konu: </th>
                        <td> <?php echo"".$_POST["konu"]?></td>
                        </tr>
                        <tr>
                        <th>Mesaj: </th>
                        <td> <?php echo"".$_POST["mesaj"]?></td>
                        </tr>
                       
                </table>
  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>
  <script src="../js/iletisim.js"></script>
</body>

</html>