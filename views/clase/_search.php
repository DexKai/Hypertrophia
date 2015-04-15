<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clase-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CLA_id') ?>

    <?= $form->field($model, 'DIS_id') ?>

    <?= $form->field($model, 'CLA_nombre') ?>

    <?= $form->field($model, 'CLA_descripcion') ?>

    <?= $form->field($model, 'CLA_imagen') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
