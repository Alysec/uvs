<?php

include 'koneksi.php';


$output = '';

$search = "SELECT * FROM data ORDER BY id DESC LIMIT 1";
$sql = mysqli_query($conn, $search);
$row = mysqli_fetch_array($sql);
$date = $row['data'];
$id = $row['id'];
$poids = $row['poids'];



$sql2 = "SELECT * FROM config";
$query = mysqli_query($conn, $sql2);
$data = mysqli_fetch_array($query);
$seuil = $data['seuil']; 

$output .= $date.'|'.$poids.'|'.$id.'|'.$seuil;

echo $output;
mysqli_close($conn);
?>