<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Capacite */

$this->title = 'Create Capacite';
$this->params['breadcrumbs'][] = ['label' => 'Capacites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="capacite-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
