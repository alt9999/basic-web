<?php
	session_start();
	if (!isset($_SESSION['zalogowany'])){
		header('Location: login.php');
	}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/style-film.css" />
    <meta charset="UTF-8">

    <!--link rel="icon" type="image/x-icon" href="logo2_AtE_icon.ico"-->
    <title>Film</title>
</head>
<a href="index.php"><div class="header"><a href ="index.php"><img src="zdj/logo.png" height="50px"></a>   <button class="prawo"><a href="login.php">Logowanie</a></button></div><br></a>
<body >
 
<div class="infoinfo">
<div class="info"><img src="<?php if(isset($_GET["zdj"])) {echo $_GET["zdj"]; }?>" height="60%" style="margin: 2%;">
<p style="color: #fff; font-size: 25px; font-family: 'Poppins';"><?php if(isset($_GET["tytul"])) {echo $_GET["tytul"]; }?></p></div>  
<div class="info2"><p style="margin: 5%; color: #fff; font-size: 25px; font-family: 'Poppins';">Opis: <br><?php if(isset($_GET["opis"])){echo $_GET["opis"]; }?><br><br>Rezyser: <?php if(isset($_GET["rezyser"])){echo $_GET["rezyser"]; }?><br>Data premiery: <?php if(isset($_GET["data_premiery"])){echo $_GET["data_premiery"]; }?></p></div>
</div>
  <div class="miejsce"></div>
    <div class="footer-zawieracz">
        <div class ="footer">
          <div class = "footer-ez footer-1">
            <h2>Twórcy</h2>
            <a href="#">Filip Kamiński</a>
            <a href="#">Olgierd Laszuk</a>
          </div>
          <div class="footer-ez footer-2">
            <h2>Kontakt</h2>
            <a href="#">Tel: 111 222 333</a>
            <a href="#">E-mail: email@mail.com</a>
          </div>
      </div>


</body>
</html>            