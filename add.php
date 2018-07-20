<?php
session_start();


function addUser(){

$forename = $_POST["forename"];
$surname = $_POST["surname"];
$email = $_POST["email"];

		if( empty($surname) || empty($forename) || empty($email)  ){
				header("Location: http://localhost/www/form.php?Message=Wypełnij wszystkie pola!");
				exit;
		} else{
				$conn = new mysqli("localhost","root","","users");
				$sql = $conn->query("INSERT INTO user(forename,surname,email) VALUES ( '$forename','$surname','$email')");
				if($sql){
				$conn->close();
				header("Location: http://localhost/www/form.php?Message=Dodano użytkownika!");
				exit;
				}else{
				$conn->close();
				header("Location: http://localhost/www/form.php?Message=Nie dodano użytkownika!");
				exit;
				}

		}

};

function update(){
$forename = $_POST["forename"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$up=0;
				if(!empty($forename)){
				$conn = new mysqli("localhost","root","","users");
				$conn->query("UPDATE user SET forename='$forename' where id=".$_SESSION['idChange'] ."");
				$conn->close();
				$up++;
				}
				
				if(!empty($surname)){
				$conn = new mysqli("localhost","root","","users");
				$conn->query("UPDATE user SET surname='$surname' where id=".$_SESSION['idChange'] ."");
				$conn->close();
				$up++;
				}
				
				if(!empty($email)){
				$conn = new mysqli("localhost","root","","users");
				$conn->query("UPDATE user SET email='$email' where id=".$_SESSION['idChange'] ."");
				$conn->close();
				$up++;
				}
				
				if($up>0){
				header("Location: http://localhost/www/form.php?Message=Zmieniono dane użytkownika o id=".$_SESSION['idChange']."");
				unset($_SESSION['idChange']);
				exit;
				}

};

function deleteUser(){
	if(isset($_POST['idChange'])){
	$d=$_POST['idChange'];
	$_SESSION['idChange']=$d ;
	}
	$conn = new mysqli("localhost","root","","users");
	$conn->query("DELETE FROM `user` WHERE `user`.`id` = ". $_SESSION[idChange]."");			
	$conn->close();
	
	
	header("Location: http://localhost/www/index.php?Message=Usunąłeś użytkownika o id=".$_SESSION['idChange']."");
	unset($_SESSION['idChange']);
	exit;

};



if(isset($_SESSION['idChange']) && isset($_POST['addUser'])){
	update();
}
else if( isset($_POST['addUser']) ) {
	addUser();
}

if(isset($_POST['idChange']) && isset($_POST['deleteUser'])){
	deleteUser();
}

unset($_SESSION['idChange']);

?>