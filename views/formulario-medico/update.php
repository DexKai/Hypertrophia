<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormularioMedico */

$this->title = 'Update Formulario Medico: ' . ' ' . $model->FM_id;
$this->params['breadcrumbs'][] = ['label' => 'Formulario Medicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FM_id, 'url' => ['view', 'id' => $model->FM_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="formulario-medico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
