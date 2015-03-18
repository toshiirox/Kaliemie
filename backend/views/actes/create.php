<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Actes */

$this->title = 'Create Actes';
$this->params['breadcrumbs'][] = ['label' => 'Actes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
