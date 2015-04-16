<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Socio */

$this->title = 'Update Socio: ' . ' ' . $model->SO_id;
$this->params['breadcrumbs'][] = ['label' => 'Socios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SO_id, 'url' => ['view', 'id' => $model->SO_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="socio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
