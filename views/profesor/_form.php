<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profesor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesor-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'PRO_rut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_apellidop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_apellidom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_disciplina')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_clases')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
