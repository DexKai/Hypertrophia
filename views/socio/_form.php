<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Progreso;
/* @var $this yii\web\View */
/* @var $model app\models\Socio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="socio-form">




    <?php $form = ActiveForm::begin(); ?>

   


    <?= $form->field($model, 'PROG_id')->dropDownList(
        ArrayHelper::map(Progreso::find()->all(),'PROG_id','PROG_peso'),
        ['prompt'=>'Seleccione que progreso le corresponde ']
        )?>

    

    <?= $form->field($model, 'SO_nombre')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'SO_apellido_materno')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'SO_apellido_paterno')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'SO_email')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'SO_direccion')->textInput(['maxlength' => 256]) ?>

    

    <?= $form->field($model, 'SO_estado_actividad')->dropDownList(
                    ['activo','inactivo','expulsado'],
        ['prompt'=>'Seleccione el estado de actividad del socio ']
        )?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
