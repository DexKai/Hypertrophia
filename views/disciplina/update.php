<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Disciplina */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Disciplina',
]) . ' ' . $model->DIS_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Disciplinas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DIS_id, 'url' => ['view', 'id' => $model->DIS_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="disciplina-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
