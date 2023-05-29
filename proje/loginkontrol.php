<?php
$user = 'g221210385@sakarya.edu.tr';
$pass= 'g221210385';
if (isset($_POST["username"]) == "POST" && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kullanıcı adı ve şifreyi kontrol edin
    if ($username == $user && $password == $pass) {
        // Login işlemi başarılı
        echo "Hoşgeldiniz \"" . $username . "\"";
       echo "Hoşgeldiniz g221210385";
        exit;
    } else {
        // Login işlemi başarısız
        header("location: login.php");
        exit;
    }
}
?>
