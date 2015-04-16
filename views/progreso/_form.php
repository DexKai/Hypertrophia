<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Progreso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="progreso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SO_id')->textInput() ?>

    <?= $form->field($model, 'PROG_peso')->textInput() ?>

    <?= $form->field($model, 'PROG_altura')->textInput() ?>

    <?= $form->field($model, 'PROG_porcentaje_grasa')->textInput() ?>

    <?= $form->field($model, 'PROG_indice_masa_corporal')->textInput() ?>

    <?= $form->field($model, 'PROG_fecha_evaluacion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
