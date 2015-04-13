<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoProfesor */

$this->title = 'Update Tipo Profesor: ' . ' ' . $model->TIP_id;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Profesors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TIP_id, 'url' => ['view', 'id' => $model->TIP_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-profesor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
