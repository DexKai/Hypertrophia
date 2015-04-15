<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InformeMedico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informe-medico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SO_id')->textInput() ?>

    <?= $form->field($model, 'PRO_id')->textInput() ?>

    <?= $form->field($model, 'IM_cardiacas')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'IM_cardicas_detalle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IM_alergias')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'IM_alergia_detalle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IM_osea')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'IM_osea_detalle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IM_muscular')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'IM_muscualr_detalle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IM_asfixia')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'IM_embarazada')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'IM_anemia')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'IM_medicamentos')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
