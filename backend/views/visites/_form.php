<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Visites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idInfirmieres')->dropDownList(
        ArrayHelper::map(app\models\Infirmieres::find()->all(),'id','nom'),
        ['prompt'=>'Selectionnez une infirmière']
    ) ?>

    <?= $form->field($model, 'idPatient')->dropDownList(
        ArrayHelper::map(app\models\Patient::find()->all(),'identifiant','nom'),
        ['prompt'=>'Selectionnez un Patient']
    ) ?>

    <?= $form->field($model, 'DateDebut')->textInput();
    $aujourdhui = new DateTime();
    $datevisite = new DateTime($model->DateDebut);
    $diff=$aujourdhui->diff($datevisite);
    //print_r($datevisite>$aujourdhui);
    if ($datevisite>$aujourdhui){include '../gcm_server_php/notifyDBUpdate.php';
    notify();}
    else {echo 'pas yo';};?>

    <?= $form->field($model, 'DateFin')->textInput(); ?>


    <?= $form->field($model, 'commentaireVisite')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
