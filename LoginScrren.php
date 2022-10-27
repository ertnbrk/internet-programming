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




    <div class="container">
        <div class="header">
            <div class="navbar">
                <a href="#">AnaSayfa</a><a href="#">Ürünler</a><a href="#" class="sepet">SEPET</a>
            </div>
        </div>
        <div class="content">


            <div class="loginDiv">
                
                <form action="#">
            <table>
                    <tr>
                        <td>
                            <label for="klnciAdi">Kullanıcı Adı:</label>
                        </td>
                        <td>
                            <input type="text" id="klnciAdi" name="klnciAdi">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sifre">Şifre:</label>
                        </td>
                        <td>
                            <input type="text" id="passw" name="passw"
                            >
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input type="submit" value="GirişYap">
                        </td>
                        
                    </tr>
                </table>
                </form>
            </div>



            <div class="registerDiv">
            
           <!-- <form action="#" class="registerForm">
            <table>
                    <tr>
                        <td>
                            <label for="kayitAdi">Kullanıcı Adı:</label>
                        </td>
                        <td>
                            <input type="text" id="kayitAdi" name="kayit" placeholder="Kullanıcı Adını gir">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="kayitpassw">Şifre:</label>
                        </td>
                        <td>
                            <input type="text" id="kayitsifre" name="kayitpassword" placeholder="Şifreni gir">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input type="submit" value="Kayıt">
                        </td>
                        
                    </tr>
                </table>
                -->
                
                </form>
            </div>
        </div>
        <div class="footer">

        </div>
    </div>


    <?php
include "loginScreenBackend.php";




?>
</body>
</html>