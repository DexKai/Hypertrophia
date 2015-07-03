<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SocioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="socio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'SO_id') ?>

    <?= $form->field($model, 'SO_rut') ?>

    <?= $form->field($model, 'SO_nombre') ?>

    <?= $form->field($model, 'SO_apellido_materno') ?>

    <?= $form->field($model, 'SO_apellido_paterno') ?>

    <?php // echo $form->field($model, 'SO_direccion') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'PROG_id') ?>

    <?php // echo $form->field($model, 'IM_id') ?>

    <?php // echo $form->field($model, 'PA_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
