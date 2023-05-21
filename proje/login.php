
<!DOCTYPE html>
<html lang="tr-TR">
<head>
   <link rel="stylesheet" type="text/css" href="login.css">
   <title>Login</title>
</head>

<body>
    <div class="center">
        <h1>Login</h1>
		<form action="loginkontrol.php" method="post">
            <div class="txt_field">
                <input type="text" name="username" required>
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
    </div>
	<div class="anasayfa">
	<button><a href="b.html">Anasayfa</a></button>
	</div>
</body>
</html>