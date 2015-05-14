<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Socio;
use yii\helpers\ArrayHelper;
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


    <?= $form->field($model, 'PA_monto')->textInput() ?>

   




    <?= $form->field($model, 'PA_pago_mes')->dropDownList(
                    ['Si','NO'],
        ['prompt'=>'¿Se efectuo el pago ? ']
        )?>


    <?= $form->field($model, 'PA_fecha_pago')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
