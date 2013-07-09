<?php
$conn = mysqli_connect("localhost", "dbwalf", "Walfdreams1!", "dbwalf");
$query = "SELECT PropID, PropName FROM propinsi ORDER BY PropName";
$sql = mysqli_query($conn, $query);
$arrpropinsi = array();
while ($row = mysqli_fetch_assoc($sql)) {
	$arrpropinsi [ $row['PropID'] ] = $row['PropName'];
}
#action get Kabupaten
if(isset($_GET['action']) && $_GET['action'] == "getKab") {
	$propFK = $_GET['propFK'];
	
	//ambil data kabupaten
	$query = "SELECT KabID, KabName FROM kabupaten WHERE PropFK ='$propFK' ORDER BY KabName";
	$sql = mysqli_query($conn, $query);
	$arrkab = array();
	while ($row = mysqli_fetch_assoc($sql)) {
		array_push($arrkab, $row);
	}
	echo json_encode($arrkab);
	exit;
}
?>