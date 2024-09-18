<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\MaintenanceRecords $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Maintenance Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="maintenance-records-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'server_id',
            'maintenance_start_date',
            'maintenance_end_date',
            'maintenance_details:ntext',
            'post_maintenance_status',
            'last_usage_log:ntext',
            'responsible_person',
            'additional_notes:ntext',
        ],
    ]) ?>

</div>
