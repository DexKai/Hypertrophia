<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Profesor;
use dosamigos\datetimepicker\DateTimePicker;

//use kartik\widgets\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Horario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horario-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'PRO_id')->dropDownList(
        ArrayHelper::map(Profesor::find()->all(),'PRO_id','PRO_nombre'),
        ['prompt'=>'Seleccione un profesor']
        )?>

    <?= $form->field($model, 'HOR_entrada')->widget(DateTimePicker::className(), [
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



    <?= $form->field($model, 'HOR_salida')->widget(DateTimePicker::className(), [
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
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
