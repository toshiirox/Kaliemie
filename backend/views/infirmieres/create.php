<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Infirmieres */

$this->title = 'Create Infirmieres';
$this->params['breadcrumbs'][] = ['label' => 'Infirmieres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="infirmieres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
