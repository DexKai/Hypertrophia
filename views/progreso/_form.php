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

    <?= $form->field($model, 'PROG_peso')->textInput(array('placeholder' => 'ejemplo: 80')) ?>

    <?= $form->field($model, 'PROG_altura')->textInput(array('placeholder' => 'ejemplo: 180')) ?>

    <?= $form->field($model, 'PROG_porcentaje_grasa')->textInput(array('placeholder' => 'ejemplo: 20')) ?>

    <?= $form->field($model, 'PROG_indice_masa_corporal')->textInput(array('placeholder' => 'ejemplo: 24')) ?>

    <?= $form->field($model, 'PROG_fecha_evaluacion')->textInput(array('placeholder' => 'ejemplo: 2015-02-10 10:12:15')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'crear' : 'actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
