<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfesorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PRO_id') ?>

    <?= $form->field($model, 'PRO_nombre') ?>

    <?= $form->field($model, 'PRO_apellido') ?>

    <?= $form->field($model, 'PRO_rut') ?>

    <?= $form->field($model, 'PRO_email') ?>

    <?php // echo $form->field($model, 'HOR_id') ?>

    <?php // echo $form->field($model, 'SUE_id') ?>

    <?php // echo $form->field($model, 'TIP_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
