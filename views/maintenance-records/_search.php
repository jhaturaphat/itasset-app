<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MaintenanceRecordsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maintenance-records-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'server_id') ?>

    <?= $form->field($model, 'maintenance_start_date') ?>

    <?= $form->field($model, 'maintenance_end_date') ?>

    <?= $form->field($model, 'maintenance_details') ?>

    <?php // echo $form->field($model, 'post_maintenance_status') ?>

    <?php // echo $form->field($model, 'last_usage_log') ?>

    <?php // echo $form->field($model, 'responsible_person') ?>

    <?php // echo $form->field($model, 'additional_notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
