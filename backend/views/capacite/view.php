<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Capacite */

$this->title = $model->idInfirmiere;
$this->params['breadcrumbs'][] = ['label' => 'Capacites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="capacite-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idInfirmiere' => $model->idInfirmiere, 'idActes' => $model->idActes], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idInfirmiere' => $model->idInfirmiere, 'idActes' => $model->idActes], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idInfirmiere',
            'idActes',
        ],
    ]) ?>

</div>
