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

    <?php //$form->field($model, 'SO_id') ?>

    <?php //$form->field($model, 'PROG_id') ?>

    <?php //$form->field($model, 'IM_id') ?>

    <?php //$form->field($model, 'PA_id') ?>

    <?php $form->field($model, 'SO_rut') ?>

    <?php  echo $form->field($model, 'SO_nombre') ?>

    <?php  echo $form->field($model, 'SO_apellido_materno') ?>

    <?php  echo $form->field($model, 'SO_apellido_paterno') ?>

    <?php  echo $form->field($model, 'SO_email') ?>

    <?php  echo $form->field($model, 'SO_direccion') ?>



    <div class="form-group">
        <?= Html::submitButton('buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
