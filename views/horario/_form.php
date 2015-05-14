<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Profesor;

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


    <?= $form->field($model, 'HOR_entrada')->textInput(array('placeholder' => 'ejemplo: 09:40')) ?>

    <?= $form->field($model, 'HOR_salida')->textInput(array('placeholder' => 'ejemplo: 17:00')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
