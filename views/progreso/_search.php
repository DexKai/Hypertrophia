<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProgresoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="progreso-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PROG_id') ?>

    <?= $form->field($model, 'SO_id') ?>

    <?= $form->field($model, 'PROG_peso') ?>

    <?= $form->field($model, 'PROG_altura') ?>

    <?= $form->field($model, 'PROG_porcentaje_grasa') ?>

    <?php // echo $form->field($model, 'PROG_indice_masa_corporal') ?>

    <?php // echo $form->field($model, 'PROG_fecha_evaluacion') ?>

    <div class="form-group">
        <?= Html::submitButton('buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
