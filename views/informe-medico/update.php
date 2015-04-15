<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InformeMedico */

$this->title = 'Update Informe Medico: ' . ' ' . $model->IM_id;
$this->params['breadcrumbs'][] = ['label' => 'Informe Medicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IM_id, 'url' => ['view', 'id' => $model->IM_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="informe-medico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
