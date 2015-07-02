<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Profesor;
use yii\helpers\ArrayHelper;
use kartik\money\MaskMoney;

/* @var $this yii\web\View */
/* @var $model app\models\Sueldo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sueldo-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'PRO_id')->dropDownList(
        ArrayHelper::map(Profesor::find()->all(),'PRO_id','PRO_nombre'),
        ['prompt'=>'Seleccione un profesor']
        )?>


     <?= $form->field($model, 'SUE_sueldo')->widget(MaskMoney::classname(), [
    'pluginOptions' => [
        'prefix' => '$ ',
       
        'allowNegative' => false
        ]
      ]);?>




  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('user', 'Create') : Yii::t('user', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
