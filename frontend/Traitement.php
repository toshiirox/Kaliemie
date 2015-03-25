<?php
require_once 'MyPDO.php';
require_once 'PreparationREQ.php';


try {
    $db = new MyPDO('mysql:host=mysql1.alwaysdata.com;dbname=rdelaporte_nerdz', '90305_robin', 'password');
    $PrepREQ = new PreparationREQ($db);
} catch (Exception $e) {
    die("Impossible de se connecter: " . $e->getMessage());
}

?>
