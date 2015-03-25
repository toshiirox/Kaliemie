<?php
require_once 'Traitement.php';
$id = $_SESSION['id'];
$req = $db->prepare('SELECT * FROM ActesVisites O, Visites V, Actes A, Infirmieres I, patient P WHERE O.idVisite=V.id AND O.idActes=A.id AND V.idInfirmieres=I.id AND V.idPatient=P.identifiant AND I.id = :id GROUP BY P.nom;
');
$req->execute(array('id' => $id));
$resultat = $req->fetch();
$resultat['P.nom'];
if (!$resultat) {
    print 'Ta requete marche pas, ducon!';
} else {

    foreach ($resultat as $r) {
        ?>
        <table>
        <caption>Interventions du <?php echo '$resultat["V.DateDebut"]'; ?> au <?php echo '$resultat["V.DateFin"]'; ?>
            .
        </caption>
        <tr>
            <th>Nom du client :</th>
            <th>Intervention(s) :</th>
            <th>Durée :</th>
        </tr>

        <tr>
            <td><?php echo '$resultat["P.nom"]'; ?></td>
            <td><?php echo '$resultat["A.libellee"]'; ?></td>
            <td><?php echo '$resultat["A.duree"]'; ?></td>
        </tr>
    <?php
    }
    ?>
    </table>
<?php
}
