<?php
require_once 'Traitement.php';
$id = $_SESSION['id'];
$req = $db->prepare('SELECT * FROM Visites V, ActesVisites O, Actes A, Infirmieres I, patient P WHERE O.idVisite=V.id AND O.idActes=A.id AND V.idInfirmieres=I.id AND V.idPatient=P.identifiant AND I.id = :id');
$req->execute(array('id' => $id));
$resultat = $req->fetchAll();
?>
    <table>
    <caption>Interventions</caption>
    <tr>
        <th>Nom du client :</th>
        <th>Intervention(s) :</th>
        <th>Durée :</th>
        <th>Date début :</th>
        <th>Date fin :</th>
    </tr>
<?php
if (!$resultat) {
    print 'Ta requete marche pas';
    ?>
    </table>
    <?php
}
else {

    foreach ($resultat as $r) {
        ?>


        <tr>
            <td><?php echo $r["nom"]; ?></td>
            <td><?php echo $r["libellee"]; ?></td>
            <td><?php echo $r["duree"]; ?></td>
            <td><?php echo $r["DateDebut"]; ?></td>
            <td><?php echo $r["DateFin"]; ?></td>
        </tr>
    <?php
    }
    ?>
    </table>
<?php
}
