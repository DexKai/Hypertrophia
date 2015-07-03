<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Socio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="socio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'PROG_id')->textInput() ?>

    <?php // $form->field($model, 'IM_id')->textInput() ?>

    <?php // $form->field($model, 'PA_id')->textInput() ?>

    <?= $form->field($model, 'SO_nombre')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'SO_apellido_materno')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'SO_apellido_paterno')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'SO_direccion')->textInput(['maxlength' => 256]) ?>

    <?php // $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
