<?php
ob_start();
$user='g201210021@sakarya.edu.tr';
$pass='123';

if(isset($_POST['username'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username==$user && $password==$pass){

        header('location:index.html');

    }
    else{
        echo 'Hata, Kullanıcı Adı veya Şifre Hatalı';
    }



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GİRİŞ SAYFASI</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark navbar-bg fixed-top">
      <div class="container row">
        <div class="col-1 ">
          <a class="navbar-brand ms-2" href="index.html"> <img src="images/logo1.jpg" alt="" style="width: 100px; height: 50px;"></a>
        </div>
        
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <div class="col-11 container">
             <ul class="navbar-nav me-3 mb-lg-0">
              <li class="nav-item me-3">
                 <a class="nav-link " href="index.html">Hakkımda</a>
              </li>
              <li class="nav-item me-3">
               <a class="nav-link" href="egitim.html">Özgeçmiş</a>
              </li>
              <li class="nav-item me-3">
               <a class="nav-link" href="sehrim.html">Şehrim</a>
             </li>
             <li class="nav-item me-3">
                <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
              </li>
               <li class="nav-item me-3">
                 <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
               </li>
               <li class="nav-item me-3">
                <a class="nav-link" href="iletisim.html">İletişim</a>
              </li>
              <li class="nav-item me-3">
                 <a class="nav-link active" aria-current="page" href="login.php">Login</a>
              </li>
           </ul>    
          </div>
        </div>
      </div>
    </nav>
            <br><br><br><br><br><br><br><br><br><br>
    <center>

    <form method="POST">
    <input type="text" name="username" placeholder="Kullanıcı Adı"><br>
    <input type="password" name="password" placeholder="Şifre" ><br>
    <button type="submit" class="btn btn-success mt-3">Giriş Yap</button>
 </form>
</body>
</html>