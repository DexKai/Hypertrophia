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

    <?= $form->field($model, 'HOR_id') ?>

    <?= $form->field($model, 'SUE_id') ?>

    <?= $form->field($model, 'IM_id') ?>

    <?= $form->field($model, 'TIP_id') ?>

    <?php // echo $form->field($model, 'PRO_rut') ?>

    <?php // echo $form->field($model, 'PRO_nombre') ?>

    <?php // echo $form->field($model, 'PRO_apellidop') ?>

    <?php // echo $form->field($model, 'PRO_apellidom') ?>

    <?php // echo $form->field($model, 'PRO_email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
