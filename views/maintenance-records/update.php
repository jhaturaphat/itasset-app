<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MaintenanceRecords $model */

$this->title = 'Update Maintenance Records: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Maintenance Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maintenance-records-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
