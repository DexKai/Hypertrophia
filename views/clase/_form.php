<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DIS_id')->textInput() ?>

    <?= $form->field($model, 'CLA_nombre')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'CLA_descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'CLA_imagen')->textInput(['maxlength' => 1024]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
