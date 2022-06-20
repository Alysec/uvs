<?php
// 

// Definition des paramtres de connexion 

$servername = "localhost";
$username = "root";
$password = "";
$db = "ui_control_panel_robots";

//creation d'une connexion à la base de données 
$conn= mysqli_connect($servername,$username,$password,$db);

if (!$conn){
	die("Impossbile de se connecter à la base de données");
}
echo "Connexion réussie";

//reccuperation du click
//Forwards
if (isset($_POST['Forwards-submit'])) { //Forwards-submit it is (name) in input
	$sql = "INSERT INTO robot_control_commands(`Forwards`, `Left`, `STOP`, `Right`, `Backwards`)
	VALUES  ('F', '', '', '', '')";

	if ($conn->query($sql) === TRUE) {
  	echo "Nouvel enregistrement créé avec succès";
	} else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	}

		//Backwards
		if (isset($_POST['Backwards-submit'])) {
			$sql = "INSERT INTO `robot_control_commands` (`Forwards`, `Left`, `STOP`, `Right`, `Backwards`) 
			VALUES ('', '', '', '', 'B');";
			
			if ($conn->query($sql) === TRUE) {
			  echo "Nouvel enregistrement créé avec succès";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();
			}
		
			//Right
			if (isset($_POST['Right-submit'])) {
			$sql = "INSERT INTO `robot_control_commands` (`Forwards`, `Left`, `STOP`, `Right`, `Backwards`) 
			VALUES ('', '', '', 'R', '');";
			
			if ($conn->query($sql) === TRUE) {
			  echo "Nouvel enregistrement créé avec succès";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}	
			$conn->close();
			}
		
			//Left
			if (isset($_POST['Left-submit'])) {
			$sql = "INSERT INTO `robot_control_commands` (`Forwards`, `Left`, `STOP`, `Right`, `Backwards`) 
			VALUES ('', 'L', '', '', '');";
			
			if ($conn->query($sql) === TRUE) {
			  echo "Nouvel enregistrement créé avec succès";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();
				}
		
			//STOP
			if (isset($_POST['STOP-submit'])) {
			$sql = "INSERT INTO `robot_control_commands` (`Forwards`, `Left`, `STOP`, `Right`, `Backwards`) 
			VALUES ('', '', 'S', '', '');";
			
			if ($conn->query($sql) === TRUE) {
			  echo "Données sauvegardées avec succès";
			} else {
			  echo "Erreure d'execution de la requete: " . $sql . "<br>" . $conn->error;
			}
			
			$conn->close();
			}
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>

<head>
    <title>Systeme de controle</title>

<link rel="stylesheet" href="styles.css"> <!-- to link css -->

</head>

<body>
  	<div class="container">
		<form action="" method="post">
			<input type="hidden" name="action" value="submit" />

			<h1>
				<input id="Forwards" type="submit" name="Forwards-submit" value="Forwards"
				<button class="button_normal" type="button" id = "Forwards"
				input type="submit">
			</button>
			</h1>

			<h2>

			<input id="Left" type="submit" name="Left-submit" value="Left"
				<button class="button_normal" type="button" id = "Left"
				input type="submit">
			</button>


			<input id="STOP" type="submit" name="STOP-submit" value="STOP"
				<button class="button_red" type="button" id = "STOP"
				input type="submit">
			</button>


			<input id="Right" type="submit" name="Right-submit" value="Right"
				<button class="button_normal" type="button" id = "Right"
				input type="submit">
			</button>

			</h2>

			<h3>
			<input id="Backwards" type="submit" name="Backwards-submit" value="Backwards"
				<button class="button_normal" type="button" id = "Backwards"
				input type="submit">
			</button>

			</h3>

		</form>

	</div>

</body>

</html>