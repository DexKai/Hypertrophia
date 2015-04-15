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

    <?php echo $form->field($model, 'IM_cardiacas[]')->dropDownList(['a' => '-', 'b' => 'Si', 'c' => 'No']); ?>

    <?= $form->field($model, 'IM_cardicas_detalle')->textarea(['rows' => 6]) ?>

  
    <?php echo $form->field($model, 'IM_alergias[]')->dropDownList(['a' => '-', 'b' => 'Si', 'c' => 'No']); ?>

    <?= $form->field($model, 'IM_alergia_detalle')->textarea(['rows' => 6]) ?>

    
    <?php echo $form->field($model, 'IM_osea[]')->dropDownList(['a' => '-', 'b' => 'Si', 'c' => 'No']); ?>

    <?= $form->field($model, 'IM_osea_detalle')->textarea(['rows' => 6]) ?>

  
    <?php echo $form->field($model, 'IM_muscular[]')->dropDownList(['a' => '-', 'b' => 'Si', 'c' => 'No']); ?>

    <?= $form->field($model, 'IM_muscualr_detalle')->textarea(['rows' => 6]) ?>


    <?php echo $form->field($model, 'IM_asfixia[]')->dropDownList(['a' => '-', 'b' => 'Si', 'c' => 'No']); ?>

    
    <?php echo $form->field($model, 'IM_embarazada[]')->dropDownList(['a' => '-', 'b' => 'Si', 'c' => 'No']); ?>

    
    <?php echo $form->field($model, 'IM_anemia[]')->dropDownList(['a' => '-', 'b' => 'Si', 'c' => 'No']); ?>

    <?= $form->field($model, 'IM_medicamentos')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>