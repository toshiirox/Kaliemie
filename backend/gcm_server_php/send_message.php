<?php
if (isset($_GET["regId"]) && isset($_GET["message"])) {
    $regId = $_GET["regId"];
    $message = $_GET["message"];
     
    include_once './GCM.php';
     
    $gcm = new GCM();
 
    $registatoin_ids = array($regId);
    $message = array("price" => $message);
 
    $result = $gcm->send_notification($registatoin_ids, $message);
 
    echo $result;
}else if (isset($_GET["allUsers"]) && isset($_GET["message"])) {
    $message = $_GET["message"];
    $regIDS = array(); // set variable as array
    include_once './db_connect.php';
    $connect= new DB_Connect();
    $db= $connect->connect();
    $query= $db->query("SELECT gcm_regid FROM gcm_users");
  	// get all ids in while loop and insert it into $regIDS array
 	while ($row2 = $query->fetch()) {
		array_push($regIDS ,$row2['gcm_regid']);
	}
    include_once './GCM.php';
     
    $gcm = new GCM();
 
    $registatoin_ids = array($regId);
    $message = array("price" => $message);
 
    $result = $gcm->send_notification($regIDS, $message);
 
    echo $result;
}
?>
