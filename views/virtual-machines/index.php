<?php

use app\models\VirtualMachines;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\VirtualMachinesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Virtual Machines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="virtual-machines-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Virtual Machines', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'server_id',
            'vm_name',
            'vm_asset_code',
            'os',
            //'allocated_cpu',
            //'allocated_ram',
            //'allocated_hard_disk_size',
            //'network_details',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, VirtualMachines $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
