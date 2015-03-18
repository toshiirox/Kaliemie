<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Capacite */

$this->title = 'Update Capacite: ' . ' ' . $model->idInfirmiere;
$this->params['breadcrumbs'][] = ['label' => 'Capacites', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idInfirmiere, 'url' => ['view', 'idInfirmiere' => $model->idInfirmiere, 'idActes' => $model->idActes]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="capacite-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
