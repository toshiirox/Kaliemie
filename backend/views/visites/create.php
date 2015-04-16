<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Visites */

$this->title = 'Create Visites';
$this->params['breadcrumbs'][] = ['label' => 'Visites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
