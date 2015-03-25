<?php
$id=$_SESSION['id'];
$req = $db->prepare('SELECT * FROM ');
$req->execute(array('id' => $id ));
$resultat = $req->fetch();