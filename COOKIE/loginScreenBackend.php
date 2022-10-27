<?php
    $kadi = "ertan";
    $sif = "123";
    
    if (isset($_GET["kayit"]) and isset($_GET["kayitsifre"])){
        session_start();
        $_SESSION["kullaniciAd"] = $_GET["kayit"];
        $_SESSION["sifre"] = $_GET["kayitsifre"];
        session_destroy();
        //! Beceremedim 
    }




    if(isset($_GET['klnciAdi']) and isset($_GET["passw"]))    //isset yani setedildi mi değer var mı ?
    {
        $kullanici = $_GET['klnciAdi'];    
        $sifre = $_GET['passw']; 

        if (($kadi==$kullanici and $sifre==$sif)){

            setcookie("kullanici",$kullanici,time()+ 30);   //Kısaca cookieye bir isim veriyoruz ve tag atıyoruz bu giriş yapananın kullanıcı adı olsun diyorum ve ne kadar süre boyunca veriyi tutsun onu ayarlamak için şuanki zamana 30 saniye ekliyoruz 
            $kurabiyem = $_COOKIE["kullanici"];
            header("Location:ürünler.php"); //Yönlendirme oluyor bu
        }
    else if ($_GET['klnciAdi']=="" or $_GET["passw"]==""){
        echo "<h1>Boş bırakmayın</h1>";
    }
        else{
            echo "<h1>Kullanıcı Adı veya şifre yanlış</h1>";
        }
    }
    
?> 