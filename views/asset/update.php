<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Asset $model */

$this->title = 'Update Asset: ' . $model->server_id;
$this->params['breadcrumbs'][] = ['label' => 'Assets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->server_id, 'url' => ['view', 'server_id' => $model->server_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asset-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
