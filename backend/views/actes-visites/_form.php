<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActesVisites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actes-visites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idVisite')->textInput() ?>

    <?= $form->field($model, 'idActes')->textInput() ?>

    <?= $form->field($model, 'estFait')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
