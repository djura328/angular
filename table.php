<?php
include "connector.php";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$type = $_POST['type'];
$id = $_POST['fName'];
$id2 = $_POST['lName'];
$id3 = $_POST['eName'];


if($type == 'save'){
    
    mysqli_query($link, "INSERT INTO `user` (username, password, email) VALUES('$id', '$id2', '$id3')");
    //echo $last_id = mysqli_insert_id($link);
}
else{
    $arr = array();
    $out = array();
    $result = mysqli_query($link, "SELECT * FROM `user`");
    $i = 1;
    while($res = mysqli_fetch_array($result)){
            $res['index'] = $i;
            $arr[] = $res;
        
    $i++;
    }

    $out['records'] = $arr;
    echo json_encode($out);
}

?>
