<?php

include 'koneksi.php';
$output = '';
$search = "SELECT * FROM data ORDER BY id DESC LIMIT 10";
$sql = mysqli_query($conn, $search);
$output = '';

$output .= '
	<div class="table-responsive">
	<table class="table">
		<tr>
			<td> id </td>
			<td> Date </td>
			<td> Poids </td>
		</tr>';

while ($row = mysqli_fetch_array($sql)){
	$output .= '
	<tr>
		<td>'.$row['id'].'</td>
		<td>'.$row['poids'].'</td>
		<td>'.$row['data'].' gr</td>

		</tr>';
}

$output .= '</table></div>';

echo $output;

?>