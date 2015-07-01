<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Socio;
use yii\helpers\ArrayHelper;
use dosamigos\datetimepicker\DateTimePicker;
use kartik\widgets\TimePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Pago */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="pago-form">

    <?php $form = ActiveForm::begin(); ?>

    

     <?= $form->field($model, 'SO_id')->dropDownList(
        ArrayHelper::map(Socio::find()->all(),'SO_id','SO_nombre'),
        ['prompt'=>'Seleccione a que socio corresponde el PAGO ']
        )?>


    <?= $form->field($model, 'PA_monto')->textInput(array('placeholder' => 'ejemplo: 150000')) ?>

   




    <?= $form->field($model, 'PA_pago_mes')->dropDownList(
                    ['Si'=> 'si','NO' => 'no'],
        ['prompt'=>'¿Se efectuo el pago ? ']
        )?>


      <?= $form->field($model, 'PA_fecha_pago')->widget(DateTimePicker::className(), [
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
