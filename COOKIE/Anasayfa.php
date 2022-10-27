<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include "loginScreenBackend.php";
$kurabiye = $_COOKIE["kullanici"];  //cookiye verdiğimiz tagi değişkenime atıyorum
if($kurabiye==""){  //kurabiyenin içi boş mu ona bkıyorum 30 sn sonra siliniceği için boş olabilir
    header("Location: LoginScrren.php");    //boş ise giriş ekranına geri dön
}
if (isset($_GET["Logout"])){
    header("Location: LoginScrren.php");
}

?>
    <h1>ANASAYFA</h1>


    <form action=""><input type="submit" value="Logout" name="Logout"></form>
</body>
</html>