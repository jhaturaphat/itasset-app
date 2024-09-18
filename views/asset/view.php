<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Asset $model */

$this->title = $model->server_id;
$this->params['breadcrumbs'][] = ['label' => 'Assets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="asset-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'server_id' => $model->server_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'server_id' => $model->server_id], [
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
            'server_id',
            'asset_code',
            'asset_name',
            'brand_model',
            'serial_number',
            'installation_location',
            'purchase_date',
            'entry_date',
            'asset_value',
            'supplier',
            'order_number',
            'warranty_period',
            'status',
            'comments:ntext',
            'os',
            'cpu',
            'ram',
            'hard_disk_size',
            'storage_type',
            'network',
            'other_ports',
        ],
    ]) ?>

</div>
