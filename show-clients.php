<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Show Clients</title>
</head>
<body>

<?php 
$name="";
$phone=0;
$email=0;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$clients = [
		1 => ['name' => $_POST["name"],
			  'phone' =>$_POST["phone"],
			  'email' =>$_POST["email"],
			],
	];

	foreach ($clients as $client) {
		echo $client;
		foreach ($client as $key => $campo) {
			var_dump($campo);
		}
	}
	echo "<h3>" . $name . "</h3>"; 
	echo "<h3>" . $phone . "</h3>";
	echo "<h3>" . $email . "</h3>";
}

?>

</body>
</html>