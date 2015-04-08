<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Soins */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="soins-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'libel')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'id_type_soins')->dropDownList(
        ArrayHelper::map(app\models\TypeSoins::find()->all(),'id','libel'),
        ['prompt'=>'Selectionnez un Type']
    ) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
