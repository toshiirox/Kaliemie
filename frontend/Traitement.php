<?php
require_once 'MyPDO.php';
require_once 'PreparationREQ.php';

try {

$db = new MyPDO('mysql:host=mysql1.alwaysdata.com;dbname=rdelaporte_nerdz','90305_robin','squateur');
echo "Connexion reussie\n\n";


$PrepREQ = new PreparationREQ($db);

//affichage des donnees avant modification
print_r($PrepREQ->selectAll());

//affichage en brut des données issues de la BD grâce au print_r (echo évolué)
print_r($PrepREQ->selectById(1));
print_r($PrepREQ->selectByName('u'));


} catch (Exception $e) {
die("Impossible de se connecter: " . $e->getMessage());
}

?>
