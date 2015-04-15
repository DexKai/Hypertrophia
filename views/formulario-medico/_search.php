<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormularioMedicoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="formulario-medico-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'FM_id') ?>

    <?= $form->field($model, 'FM_cardiacas') ?>

    <?= $form->field($model, 'FM_alegias') ?>

    <?= $form->field($model, 'FM_osea') ?>

    <?= $form->field($model, 'FM_muscular') ?>

    <?php // echo $form->field($model, 'FM_asfixia') ?>

    <?php // echo $form->field($model, 'FM_embarazada') ?>

    <?php // echo $form->field($model, 'FIM_anemia') ?>

    <?php // echo $form->field($model, 'FM_alergia') ?>

    <?php // echo $form->field($model, 'FM_medicamentos') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
