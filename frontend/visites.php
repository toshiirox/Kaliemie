<?php
require_once 'Traitement.php';
$id = $_SESSION['id'];
$req = $db->prepare('
SELECT * FROM Visites V, ActesVisites O, Infirmieres I, patient P, soins S WHERE S.id=O.idActes AND O.idVisite=V.id AND V.idInfirmieres=I.id AND V.idPatient=P.identifiant AND I.id = :id
');
$req->execute(array('id' => $id));
$resultat = $req->fetchAll();
?>
    <table>
    <caption>Interventions</caption>
    <tr>
        <th>Nom du client : </th>
        <th> Intervention(s) : </th>

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

            <td><?php echo utf8_encode($r["libel"]); ?></td>



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
