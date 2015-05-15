<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profesor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesor-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'PRO_rut')->textInput(array('placeholder' => 'ejemplo: 12345678-9')) ?>

    <?= $form->field($model, 'PRO_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_apellidop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_apellidom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRO_email')->textInput(array('placeholder' => 'ejemplo@ejemplo.com')) ?>


    <?= $form->field($model, 'PRO_disciplina')->dropDownList(['Meditación'=> 'Meditación', 'Musculación'=> 'Musculación', 'Fitness grupal'=>'Fitness grupal' ],['prompt'=>'Seleccione una opción']) ?>

    <?= $form->field($model, 'PRO_clases')->dropDownList([

        'Pilates'=> 'Pilates',
        'Yoga'=> 'Yoga',
        'Oxígeno'=> 'Oxígeno',
        'Shaki fit'=> 'Shaki fit',
        'Abdominales'=> 'Abdominales',
        'Body pump'=> 'Body pump',
        'Endurance'=> 'Endurance',
        'Grit series'=> 'Grit series',
        'Insanity'=> 'Insanity',
        'Aero-local'=> 'Aero-local',
        'Baile entretenido'=> 'Baile entretenido',
        'Body Combat'=> 'Body Combat',
        'Cardio box'=> 'Cardio box',
        'Local Step'=> 'Local Step',
        'Power punch'=> 'Power punch',
        
    ],['prompt'=>'Seleccione una opción'])?>







    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
