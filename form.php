<!DOCTYPE html>
<html>
<head>
<title>Dane</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>

<body>
<nav>
<ul>
  <li><a href="index.php">Tabela</a></li>
  <li><a href="form.php">Dodawanie</a></li>
  
</ul>
</nav>
<article >
<?php
session_start();
	if( isset($_GET['Message']) ){
	echo $_GET['Message'];
	}
	if(isset($_POST['idChange'])){
$d=$_POST['idChange'];
$_SESSION['idChange']=$d ;
echo "Zmieniasz dane użytkownika o id=".$_SESSION['idChange'];
}
?>
<form method="POST" action="add.php">
<label>Imię</label>
<input name="forename" type="text"> <br>
<label>Nazwisko</label>
<input name="surname" type="text"> <br>
<label>Email</label>
<input name="email" type="text"> <br>

<input type="submit" name="addUser" value="zapisz">
</form>


</article>
<footer>
            <a>&copy; 2018</a>
        </footer>
</body>
</html>