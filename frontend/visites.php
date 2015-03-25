<?php
$id=$_SESSION['id'];
$req = $db->prepare('SELECT * FROM ActesVisites AV, Visites V, Actes A, Infirmieres I, Patients P WHERE AV.idVisite=V.id AND AV.idActes=A.id AND V.idInfirmiere=I.id AND V.idPatient=P.identifiant AND V.idInfirmiere = :id');
$req->execute(array('id' => $id ));
$resultat = $req->fetch();