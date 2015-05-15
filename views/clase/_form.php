<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Disciplina;

/* @var $this yii\web\View */
/* @var $model app\models\Clase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DIS_id')->dropDownList(
        ArrayHelper::map(Disciplina::find()->all(),'DIS_id','DIS_nombre'),
        ['prompt'=>'Seleccione la disciplina que corresponde la clase ']
        )?>

    <?= $form->field($model, 'CLA_nombre')->textInput(array('placeholder' => 'ejemplo: AeroBox')) ?>

    <?= $form->field($model, 'CLA_descripcion')->textarea(array('placeholder' => 'ejemplo: Entrenamiento de alto redimiento...')) ?>

    <?= $form->field($model, 'CLA_imagen')->textInput(['maxlength' => 1024]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
