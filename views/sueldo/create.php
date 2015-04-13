<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sueldo */

$this->title = 'Create Sueldo';
$this->params['breadcrumbs'][] = ['label' => 'Sueldos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sueldo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
