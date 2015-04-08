<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\ActesVisites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actes-visites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idVisite')->dropDownList(
        ArrayHelper::map(app\models\Visites::find()->all(),'id','id'),
        ['prompt'=>'Selectionnez une Visite']
    ) ?>

    <?= $form->field($model, 'idActes')->dropDownList(
        ArrayHelper::map(app\models\Soins::find()->all(),'id','id'),
        ['prompt'=>'Selectionnez un Soin']
    ) ?>

    <?= $form->field($model, 'estFait')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
