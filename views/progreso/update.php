<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Progreso */

$this->title = 'Update Progreso: ' . ' ' . $model->PROG_id;
$this->params['breadcrumbs'][] = ['label' => 'Progresos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PROG_id, 'url' => ['view', 'id' => $model->PROG_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="progreso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
