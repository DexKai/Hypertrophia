<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormularioMedico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="formulario-medico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FM_cardiacas')->textInput() ?>

    <?= $form->field($model, 'FM_alegias')->textInput() ?>

    <?= $form->field($model, 'FM_osea')->textInput() ?>

    <?= $form->field($model, 'FM_muscular')->textInput() ?>

    <?= $form->field($model, 'FM_asfixia')->textInput() ?>

    <?= $form->field($model, 'FM_embarazada')->textInput() ?>

    <?= $form->field($model, 'FIM_anemia')->textInput() ?>

    <?= $form->field($model, 'FM_alergia')->textInput() ?>

    <?= $form->field($model, 'FM_medicamentos')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
