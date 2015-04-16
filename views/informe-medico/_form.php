<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Profesor;



/* @var $this yii\web\View */
/* @var $model app\models\InformeMedico */
/* @var $form yii\widgets\ActiveForm */

/*   <?= $form->field($model, 'PRO_id')->dropDownList(
        ArrayHelper::map(Profesor::find()->all(),'PRO_id','PRO_nombre'),
    ['prompt'=>'Seleccione un profesor']

    ) ?>*/
?>

<div class="informe-medico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SO_id')->textInput() ?>


    <?= $form->field($model, 'PRO_id')->dropDownList(
        ArrayHelper::map(Profesor::find()->all(),'PRO_id','PRO_nombre'),
        ['prompt'=>'Seleccione un profesor']
        )?>
    
    <?php echo $form->field($model, 'IM_cardiacas')->dropDownList(['Si' => 'Si', 'No' => 'No'],['prompt'=>'Seleccione una opción']); ?>

    <?= $form->field($model, 'IM_cardicas_detalle')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'IM_alergias')->dropDownList(['Si' => 'Si', 'No' => 'No'],['prompt'=>'Seleccione una opción']); ?>

    <?= $form->field($model, 'IM_alergia_detalle')->textarea(['rows' => 6]) ?>
  
    <?php echo $form->field($model, 'IM_osea')->dropDownList(['Si' => 'Si', 'No' => 'No'],['prompt'=>'Seleccione una opción']); ?>

    <?= $form->field($model, 'IM_osea_detalle')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'IM_muscular')->dropDownList(['Si' => 'Si', 'No' => 'No'],['prompt'=>'Seleccione una opción']); ?>

    <?= $form->field($model, 'IM_muscualr_detalle')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'IM_asfixia')->dropDownList(['Si' => 'Si', 'No' => 'No'],['prompt'=>'Seleccione una opción']); ?>
    
    <?php echo $form->field($model, 'IM_embarazada')->dropDownList(['Si' => 'Si', 'No' => 'No'],['prompt'=>'Seleccione una opción']); ?>

    <?php echo $form->field($model, 'IM_anemia')->dropDownList(['Si' => 'Si', 'No' => 'No'],['prompt'=>'Seleccione una opción']); ?>

    <?= $form->field($model, 'IM_medicamentos')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
