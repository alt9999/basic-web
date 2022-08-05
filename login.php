<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
		header('Location: index.php');
		exit();
	}

?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta charset="UTF-8">
    <title>Login - Filmowo</title>
</head>
  <body>
    <a href="index.php"><div class="header"><img src="zdj/logo.png" >  </a>
          </div>
    <br><br><br>
    <div class="login">
      
    <h1>Login</h1><br>
    </form>
    <form action="zaloguj.php" method="post">
      <input type="text" class="inputor" placeholder="Login" name="login" /><br><br> 
      <input type="password" name="haslo" placeholder="Haslo" class="inputor"/><br><br>
      <button type="submit">Zaloguj</button>
    </form>
    <?php
	  if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
    ?>
    </div>
  </body>
</html>