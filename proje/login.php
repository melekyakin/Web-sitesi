
<!DOCTYPE html>
<html lang="tr-TR">
<head>
   <link rel="stylesheet" type="text/css" href="login.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/d755b7edb1.js" crossorigin="anonymous"></script>
   <title>Login</title>
</head>

<body>
<div>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="anasayfa.html">Anasayfa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 ms-auto me-3">
        <li class="nav-item">
          <a class="nav-link" href="hakkinda.html">Hakkında</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sehrim.html">Şehrim</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="iletisim.html">İletişim</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
     </div>
   </div>
   </div>
   <div class="center">
        <h1>Login</h1>
		<form action="loginkontrol.php" method="post">
            <div class="txt_field">
                <input type="email" name="username" required>
                <label>Kullanıcı Adı</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <label>Şifre</label>
            </div>
            <div class="pass">Şifreni mi unuttun?</div>
            <input type="submit" value="Giriş Yap">
            <div class="signup_link">
                Üye değil misin? <a href="#">Üye Ol</a>
            </div>
        </form>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-black"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-black"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-black"><i class="fab fa-google fa-lg"></i></a>
              </div>
   </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
