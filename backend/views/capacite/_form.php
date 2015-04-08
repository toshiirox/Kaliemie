<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Capacite */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="capacite-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idInfirmiere')->dropDownList(
        ArrayHelper::map(app\models\Infirmieres::find()->all(),'id','nom'),
        ['prompt'=>'Selectionnez une infirmière']
    ) ?>
    <?= $form->field($model, 'idActes')->dropDownList(
        ArrayHelper::map(app\models\Soins::find()->all(),'id','libel'),
        ['prompt'=>'Selectionnez une capacité']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
