<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profesor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PRO_nombre')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'PRO_apellido')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'PRO_rut')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'PRO_email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'HOR_id')->textInput() ?>

    <?= $form->field($model, 'SUE_id')->textInput() ?>

    <?= $form->field($model, 'TIP_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
