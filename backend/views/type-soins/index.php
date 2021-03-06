<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TypeSoinsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Type Soins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-soins-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Type Soins', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'libel:ntext',
            'description:ntext',
            'id_categ_soins',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
