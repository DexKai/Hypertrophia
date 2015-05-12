<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Progreso */

$this->title = 'Crear Progreso';
$this->params['breadcrumbs'][] = ['label' => 'Progresos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="progreso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
