<?php
$identifiant=$_POST['username'];
$mot_de_passe=$_POST['password'];
require_once ''

try
{
    $bdd = new PDO($host, $user, $password);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$pass_hache = sha1($mot_de_passe);
$req = $bdd->prepare('SELECT Numero FROM avocats WHERE Identifiant = :Ident AND mot_de_passe = :pass');
$req->execute(array(
    'Ident' => $identifiant,
    'pass' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    header('location:erreur_connexion.php');
    //echo $pass_hache;
}
else
{
    session_start();
    $_SESSION['numero'] = $resultat['Numero'];
    $_SESSION['identifiant'] = $_POST['identifiant'];
    $identifiant = $_SESSION['identifiant'];
    include ('calcul_temps.php');
    $date = date("Y-m-d H:i:s");

    $req = $bdd->prepare('UPDATE avocats SET avantderniere_connexion = Derniere_connexion  WHERE Identifiant = :Ident ');
    $req->execute(array(
        'Ident' => $identifiant));

    $req = $bdd->prepare('UPDATE avocats SET Derniere_connexion = NOW()  WHERE Identifiant = :Ident ');
    $req->execute(array(
        'Ident' => $identifiant));

    header('location:redirection_premiere.php');

}