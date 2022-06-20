<?php

include 'koneksi.php';

$seuil = $_POST['batas'];
$sql = "UPDATE config SET seuil='$seuil'";
if (mysqli_query($conn, $sql)){
	
}

?>