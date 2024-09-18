<?php

use app\models\MaintenanceRecords;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\MaintenanceRecordsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Maintenance Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maintenance-records-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Maintenance Records', ['create'], ['class' => 'btn btn-success']) ?>
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
            'maintenance_start_date',
            'maintenance_end_date',
            'maintenance_details:ntext',
            //'post_maintenance_status',
            //'last_usage_log:ntext',
            //'responsible_person',
            //'additional_notes:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MaintenanceRecords $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
