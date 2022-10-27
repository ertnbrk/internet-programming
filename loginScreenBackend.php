<?php
    $kadi = "ertan";
    $sif = "123";
    if(isset($_GET['klnciAdi']) and isset($_GET["passw"]))    //isset yani setedildi mi değer var mı ?
    {
        $kullanici = $_GET['klnciAdi'];    
        $sifre = $_GET['passw']; 

        if ($kadi==$kullanici and $sifre==$sif){

            setcookie("kullanici",$kullanici,time()+ 30);   //Kısaca cookieye bir isim veriyoruz ve tag atıyoruz bu giriş yapananın kullanıcı adı olsun diyorum ve ne kadar süre boyunca veriyi tutsun onu ayarlamak için şuanki zamana 30 saniye ekliyoruz 
            $kurabiyem = $_COOKIE["kullanici"];
            header("Location:ürünler.php"); //Yönlendirme oluyor bu
        }
        else{
            echo "<h1>Kullanıcı Adı veya şifre yanlış</h1>";
        }
    }
    
?> 