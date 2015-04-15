<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Profesor */

$this->title = 'Update Profesor: ' . ' ' . $model->PRO_id;
$this->params['breadcrumbs'][] = ['label' => 'Profesors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PRO_id, 'url' => ['view', 'id' => $model->PRO_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profesor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
