<?php
include 'core/head.php';
$identifiant=$_POST['Username'];
$mot_de_passe=$_POST['Password'];
require_once 'Traitement.php';
include 'core/header.php';
include 'core/navbar.php';
$req = $db->prepare('SELECT id FROM Patients WHERE nom = :utilisateur AND prenom = :pass');
$req->execute(array(
    'utilisateur' => $identifiant,
    /*'pass' => $pass_hache*/
    'pass' => $mot_de_passe));

$resultat = $req->fetch();

if (!$resultat)
{
    print 'Erreur de mot de passe ou de login';
    ?>
    <a href="index.php">retour</a>
    <?php
}
else
{
    session_start();
    ?>
    <a href="index.php">retour</a>
    <?php
    $_SESSION['id'] = $resultat['id'];
}
include 'core/footer.php';
