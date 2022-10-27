<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php
include "loginScreenBackend.php";
$kurabiye = $_COOKIE["kullanici"];  //cookiye verdiğimiz tagi değişkenime atıyorum
if($kurabiye==""){  //kurabiyenin içi boş mu ona bkıyorum 30 sn sonra siliniceği için boş olabilir
    header("Location: LoginScrren.php");    //boş ise giriş ekranına geri dön
}
?>


    <div class="container">
        <div class="header">
            <div class="navbar">
                <a href="ürünler.php">AnaSayfa</a><a href="ürünler.php">Ürünler</a><a href="ürünler.php" class="sepet">SEPET</a>
            </div>
        </div>
        <div class="content">
            <H1>HELLO</H1>
        </div>
</div>

</body>
</html>