<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypeSoins */

$this->title = 'Update Type Soins: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Type Soins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-soins-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
