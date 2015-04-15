<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TipoProfesor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-profesor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TIP_nombre')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
