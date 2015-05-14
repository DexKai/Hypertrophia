<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Socio;

/* @var $this yii\web\View */
/* @var $model app\models\Progreso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="progreso-form">

    <?php $form = ActiveForm::begin(); ?>

    

    <?= $form->field($model, 'SO_id')->dropDownList(
        ArrayHelper::map(Socio::find()->all(),'SO_id','SO_nombre'),
        ['prompt'=>'Seleccione a que socio corresponde el progreso ']
        )?>

    <?= $form->field($model, 'PROG_peso')->textInput() ?>

    <?= $form->field($model, 'PROG_altura')->textInput() ?>

    <?= $form->field($model, 'PROG_porcentaje_grasa')->textInput() ?>

    <?= $form->field($model, 'PROG_indice_masa_corporal')->textInput() ?>

    <?= $form->field($model, 'PROG_fecha_evaluacion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'crear' : 'actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
