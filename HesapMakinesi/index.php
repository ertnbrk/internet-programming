<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
</head>
<body>
    
    <form action="">
        <pre>
        1.Sayı<input type="text" name="sayi1">
        2.Sayı<input type="text" name="sayi2">
        
        <select name="secim" id="secim">
            <option value="Toplama" name="Toplama">Toplama</option>
            <option value="Cikarma" name="Cikarma">Cikarma</option>
            <option value="Carpma"name="Carpma">Carpma</option>
            <option value="Bolme"name="Bolme">Bolme</option>
        </select>
        <input type="submit" name="gonder" value="Hesapla">
        </pre>
    </form>
    <?php
    try{
        if(isset($_GET['sayi1']) and isset($_GET["sayi2"]))
        {
            $sayi1 = $_GET['sayi1'];
            $sayi2 = $_GET['sayi2'];
            
    
            $secim = $_GET['secim'];
    switch($secim){
        case "Toplama":
            echo $sayi1+$sayi2;
            break;
        case "Cikarma":
            echo $sayi1-$sayi2;
            break;
        case "Carpma":
            echo $sayi1*$sayi2;
            break;
        case "Bolme":
            echo $sayi1/$sayi2;
            break;
    }
}
else{
    echo "Hatalı Giriş";
}
    }
    catch (Exception $e){
        echo "Hata mevcut hata adı = ".$e;
    }
    ?>
</body>
</html>





