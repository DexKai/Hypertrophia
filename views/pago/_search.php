<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Socio;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\PagoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pago-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model,  ArrayHelper::map(Socio::find()->all(),'SO_id','SO_nombre') ?>

    <?= $form->field($model, 'SO_id') ?>

    <?= $form->field($model, 'PA_monto') ?>

    <?= $form->field($model, 'PA_pago_mes') ?>

    <?= $form->field($model, 'PA_fecha_pago') ?>

    <div class="form-group">
        <?= Html::submitButton('buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
