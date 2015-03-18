<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VisitesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Visites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visites-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Visites', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idInfirmieres',
            'idPatient',
            'DateDebut',
            'DateFin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
