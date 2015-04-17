<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\InformeMedico */

$this->title = 'Crear Informe Medico';
$this->params['breadcrumbs'][] = ['label' => 'Informe Medicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informe-medico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
