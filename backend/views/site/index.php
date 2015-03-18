<?php
/* @var $this yii\web\View */
$this->title = 'Gestion du site';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Gestion des données </h1>

        <p class="lead">Vous êtes bien sur le module de gestion du site.</p>

        <p><a class="btn btn-lg btn-success" href='index.php?r=site%2Flogin'>Se Connecter et gérer le site.</a></p>
    </div>
    <?php
    if (Yii::$app->user->isGuest) {

    } else {
        ?>
        <div class="body-content">
            <div class="row">
                <div class="col-lg-4">
                    <h2>Gestion des Patients</h2>

                    <p><a class="btn btn-default" href="#">Patients &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <h2>Gestion des Patients</h2>

                    <p><a class="btn btn-default" href="#">Patients &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <h2>Gestion des <Patient></Patient>s</h2>

                    <p><a class="btn btn-default" href="#">Patients &raquo;</a></p>
                </div>
            </div>
        </div>
    <?php
    }

    ?>
</div>
