<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Socio;
use dosamigos\datetimepicker\DateTimePicker;

use kartik\widgets\TimePicker;
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


     <?= $form->field($model, 'PROG_fecha_evaluacion')->widget(DateTimePicker::className(), [
       'language' => 'es',
       'size' => 'ms',
       'template' => '{input}',
       'inline' => false,
       'clientOptions' => [
           'startView' => 1,
           'minView' => 0,
           'maxView' => 1,
           'autoclose' => false,
           'linkFormat' => 'HH:ii P', // if inline = true
        // 'format' => 'HH:ii P', // if inline = false
           'todayBtn' => false
       ]
     ]);?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'crear' : 'actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
