<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dane</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav>
<ul>
  <li><a href="index.php">Tabela</a></li>
  <li><a href="form.php">Dodawanie</a></li>
  
</ul>
</nav>
<article >

<div class="table">
<?php
$conn = new mysqli('localhost', 'root', '', 'users') or die("błąd");
$result = $conn->query("SELECT * FROM user");

if($result->num_rows > 0){
echo "<table>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>imię</th>";
echo "<th>nazwisko</th>";
echo "<th>email</th>";
echo "<th>opcje</th>";
echo "</tr>";
while($row = $result->fetch_assoc() ){
echo "<tr>";
$id=$row["id"];
echo "<td>" . $row["id"]	. "</td>";
echo "<td>" . $row["forename"]	. "</td>";
echo "<td>" . $row["surname"]	. "</td>";
echo "<td>" . $row["email"]	. "</td>";
?>
<td> 
<form name="edit" action="form.php" method="POST">
<input type="hidden" name="idChange" value="<?php echo $row["id"];  ?>"/>
            <input type="submit" name="edit" value="Edytuj"/>
</form>

<form name="deleteUser" action="add.php" method="POST">
<input type="hidden" name="idChange" value="<?php echo $row["id"];  ?>"/>
            <input type="submit" name="deleteUser" value="Usuń"/>
</form>
</td>
<?php
echo "</tr>";
}
echo "</table>";

}

else{
echo "baza pusta";
}
$conn->close();
?>
</div>
</article>
<footer>
            <a>&copy; 2018</a>
        </footer>
</body>
</html>