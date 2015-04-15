<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FormularioMedico */

$this->title = 'Create Formulario Medico';
$this->params['breadcrumbs'][] = ['label' => 'Formulario Medicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formulario-medico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
