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


    <?php $form->field($model, 'PRO_rut') ?>

    <?php $form->field($model, 'PRO_nombre') ?>

    <?php $form->field($model, 'PRO_apellidop') ?>

    <?php $form->field($model, 'PRO_apellidom') ?>

    <?php $form->field($model, 'PRO_email') ?>

    <?php // echo $form->field($model, 'PRO_disciplina') ?>

    <?php // echo $form->field($model, 'PRO_clases') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
