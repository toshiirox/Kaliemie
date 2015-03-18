<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ActesVisites */

$this->title = $model->idVisite;
$this->params['breadcrumbs'][] = ['label' => 'Actes Visites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actes-visites-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idVisite' => $model->idVisite, 'idActes' => $model->idActes], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idVisite' => $model->idVisite, 'idActes' => $model->idActes], [
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
            'idVisite',
            'idActes',
        ],
    ]) ?>

</div>
