<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InfirmieresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Infirmieres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="infirmieres-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Infirmieres', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'nom',
            'prenom',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
