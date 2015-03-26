<?php
require_once 'Traitement.php';
$id = $_SESSION['id'];
$req = $db->prepare('
SELECT * FROM Visites AS V
JOIN patient AS P ON P.identifiant=V.idPatient
RIGHT JOIN Infirmieres AS I ON V.idInfirmieres = I.id
JOIN ActesVisites AS AV ON AV.idVisite = V.id
JOIN Actes AS A ON AV.idActes=A.id
WHERE I.id=:id
');
$req->execute(array('id' => $id));
$resultat = $req->fetchAll();
?>
    <table>
    <caption>Interventions</caption>
    <tr>
        <th>Nom du client : </th>
        <th> Intervention(s) : </th>
        <th> Durée : </th>
        <th> Date début : </th>
        <th> Date fin : </th>
    </tr>
<?php
if (!$resultat) {
    print 'Ta requete marche pas';
    ?>
    </table>
<?php
}
else {
    $voidname="";
    $voiddatedeb="";
    $voiddatefin="";
    foreach ($resultat as $r) {

        ?>
        <tr>
            <td>
                <?php

                if($voidname=="") {
                    echo $r["nom"];
                    $voidname=$r["nom"];
                }

                elseif($voidname!=$r["nom"]){
                    echo $r["nom"];
                    $voidname=$r["nom"];
                }

                ?>
            </td>

            <td><?php echo utf8_encode($r["libellee"]); ?></td>

            <td><?php echo $r["duree"]; ?></td>

            <td>
                <?php

                if ($voiddatedeb=="") {
                    echo $r["DateDebut"];
                    $voiddatedeb = $r["DateDebut"];
                }

                elseif($voiddatedeb!=$r["DateDebut"]){
                    echo $r["DateDebut"];
                    $voiddatedeb=$r["DateDebut"];
                }
                ?>
            </td>

            <td>
                <?php

                if ($voiddatefin=="") {
                    echo $r["DateFin"];
                    $voiddatefin = $r["DateFin"];
                }

                elseif($voiddatefin!=$r["DateFin"]){
                    echo $r["DateFin"];
                    $voiddatefin=$r["DateFin"];
                }
                ?>
            </td>

        </tr>
    <?php
    }
    ?>
    </table>
<?php
}
