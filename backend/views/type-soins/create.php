<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TypeSoins */

$this->title = 'Create Type Soins';
$this->params['breadcrumbs'][] = ['label' => 'Type Soins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-soins-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
