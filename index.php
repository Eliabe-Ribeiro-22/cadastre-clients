<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Cadastre Clients</title>
</head>
<body>
	<main>
		<h1>Cadastre clients</h1>		
		<form action="" method="post">
			<h2>Write your informations:</h2>
			
			<label>Name:</label>
			<input type="text" name="name">
			
			<label>Phone:</label>
			<input type="telefone" name="phone">
			
			<label>Email:</label>
			<input type="email" name="email">
			
			<button>Save&#128190;</button>
		</form>
	</main>
</body>
</html>

<?php 
$name="";
$phone=0;
$email=0;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$name= $_POST["name"];
	$phone= $_POST["phone"];
	$email= $_POST["email"];

	echo "<h3>" . $name . "</h3>"; 
	echo "<h3>" . $phone . "</h3>";
	echo "<h3>" . $email . "</h3>";
}