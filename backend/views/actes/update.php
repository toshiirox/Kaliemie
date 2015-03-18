<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Actes */

$this->title = 'Update Actes: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Actes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="actes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
