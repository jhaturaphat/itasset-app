<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\VirtualMachines $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Virtual Machines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="virtual-machines-view">

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
            'vm_name',
            'vm_asset_code',
            'os',
            'allocated_cpu',
            'allocated_ram',
            'allocated_hard_disk_size',
            'network_details',
            'status',
        ],
    ]) ?>

</div>
