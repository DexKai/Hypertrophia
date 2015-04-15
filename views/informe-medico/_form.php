<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InformeMedico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informe-medico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SO_id')->textInput() ?>

    <?= $form->field($model, 'PRO_id')->textInput() ?>

    <?= $form->field($model, 'IM_cardiacas')->textInput() ?>

    <?= $form->field($model, 'IM_alergias')->textInput() ?>

    <?= $form->field($model, 'IM_osea')->textInput() ?>

    <?= $form->field($model, 'IM_muscular')->textInput() ?>

    <?= $form->field($model, 'IM_asfixia')->textInput() ?>

    <?= $form->field($model, 'IM_embarazada')->textInput() ?>

    <?= $form->field($model, 'IM_anemia')->textInput() ?>

    <?= $form->field($model, 'IM_alergia')->textInput() ?>

    <?= $form->field($model, 'IM_medicamentos')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
