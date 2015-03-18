<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActesVisites */

$this->title = 'Update Actes Visites: ' . ' ' . $model->idVisite;
$this->params['breadcrumbs'][] = ['label' => 'Actes Visites', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idVisite, 'url' => ['view', 'idVisite' => $model->idVisite, 'idActes' => $model->idActes]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="actes-visites-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
