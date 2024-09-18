<?php

use app\models\Asset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\AssetSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Assets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asset-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Asset', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'server_id',
            'asset_code',
            'asset_name',
            'brand_model',
            'serial_number',
            //'installation_location',
            //'purchase_date',
            //'entry_date',
            //'asset_value',
            //'supplier',
            //'order_number',
            //'warranty_period',
            //'status',
            //'comments:ntext',
            //'os',
            //'cpu',
            //'ram',
            //'hard_disk_size',
            //'storage_type',
            //'network',
            //'other_ports',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Asset $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'server_id' => $model->server_id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
