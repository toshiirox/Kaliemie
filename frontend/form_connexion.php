<?php
include 'core/head.php';
$identifiant = $_POST['Username'];
$mot_de_passe = $_POST['Password'];
require_once 'Traitement.php';
include 'core/header.php';
include 'core/navbar.php';
$req = $db->prepare('SELECT id FROM Infirmieres WHERE nom = :utilisateur AND prenom = :pass');
$req->execute(array(
    'utilisateur' => $identifiant,
    'pass' => $mot_de_passe));

$resultat = $req->fetch();

if (!$resultat) {
    print 'Erreur de mot de passe ou de login';
    ?>
    <a href="">retour</a>
<?php
} else {
    session_start();
    ?>
    <p>bienvenue, <?php echo $identifiant; ?></p>
    <a href="index.php">retour</a>
    <?php
    $_SESSION['id'] = $resultat['id'];
}
include 'core/footer.php';
