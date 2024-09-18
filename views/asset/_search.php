<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AssetSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="asset-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'server_id') ?>

    <?= $form->field($model, 'asset_code') ?>

    <?= $form->field($model, 'asset_name') ?>

    <?= $form->field($model, 'brand_model') ?>

    <?= $form->field($model, 'serial_number') ?>

    <?php // echo $form->field($model, 'installation_location') ?>

    <?php // echo $form->field($model, 'purchase_date') ?>

    <?php // echo $form->field($model, 'entry_date') ?>

    <?php // echo $form->field($model, 'asset_value') ?>

    <?php // echo $form->field($model, 'supplier') ?>

    <?php // echo $form->field($model, 'order_number') ?>

    <?php // echo $form->field($model, 'warranty_period') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'os') ?>

    <?php // echo $form->field($model, 'cpu') ?>

    <?php // echo $form->field($model, 'ram') ?>

    <?php // echo $form->field($model, 'hard_disk_size') ?>

    <?php // echo $form->field($model, 'storage_type') ?>

    <?php // echo $form->field($model, 'network') ?>

    <?php // echo $form->field($model, 'other_ports') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
