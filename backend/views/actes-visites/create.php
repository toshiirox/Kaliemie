<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ActesVisites */

$this->title = 'Create Actes Visites';
$this->params['breadcrumbs'][] = ['label' => 'Actes Visites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actes-visites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
