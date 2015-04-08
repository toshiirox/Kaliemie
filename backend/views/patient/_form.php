<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'nom')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'prenom')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'adresse')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'codePostal')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'ville')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'dateNaiss')->textInput() ?>

    <?= $form->field($model, 'commentaireVisite')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
