<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActesVisitesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actes Visites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actes-visites-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Actes Visites', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idVisite',
            'idActes',
            'estFait',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
