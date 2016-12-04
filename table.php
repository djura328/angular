<?php
include "connector.php";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$id = $_POST['fName'];
$id2 = $_POST['lName'];

$result = mysqli_query($link, "SELECT * FROM wp_posts WHERE ID BETWEEN '$id' AND '$id2'");
$outp = "";
while($res = mysqli_fetch_array($result)){
	$outp .= '{"Name":"'  . $res['ID'] . '",';
	$outp .= '"Country":"'. $res['post_title'] . '",';
	$outp .= '"Country2":"'. $res['post_status'] . '"},';
}
$outp = rtrim($outp, ",");
$outps ='{"records":['.$outp.'], "records2":['.$outp.']}';
echo $outps;


?>
