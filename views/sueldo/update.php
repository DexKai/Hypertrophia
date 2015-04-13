<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sueldo */

$this->title = 'Update Sueldo: ' . ' ' . $model->SUE_id;
$this->params['breadcrumbs'][] = ['label' => 'Sueldos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SUE_id, 'url' => ['view', 'id' => $model->SUE_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sueldo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
