<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InformeMedicoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informe-medico-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IM_id') ?>

    <?= $form->field($model, 'SO_id') ?>

    <?= $form->field($model, ArrayHelper::map(Profesor::find()->all(),'PRO_id','PRO_nombre') ?>

    <?= $form->field($model, 'IM_cardiacas') ?>

    <?= $form->field($model, 'IM_cardicas_detalle') ?>

    

    <?php // echo $form->field($model, 'IM_alergias') ?>

    <?php // echo $form->field($model, 'IM_alergia_detalle') ?>

    <?php // echo $form->field($model, 'IM_osea') ?>

    <?php // echo $form->field($model, 'IM_osea_detalle') ?>

    <?php // echo $form->field($model, 'IM_muscular') ?>

    <?php // echo $form->field($model, 'IM_muscualr_detalle') ?>

    <?php // echo $form->field($model, 'IM_asfixia') ?>

    <?php // echo $form->field($model, 'IM_embarazada') ?>

    <?php // echo $form->field($model, 'IM_anemia') ?>

    <?php // echo $form->field($model, 'IM_medicamentos') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
