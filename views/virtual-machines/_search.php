<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\VirtualMachinesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="virtual-machines-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'server_id') ?>

    <?= $form->field($model, 'vm_name') ?>

    <?= $form->field($model, 'vm_asset_code') ?>

    <?= $form->field($model, 'os') ?>

    <?php // echo $form->field($model, 'allocated_cpu') ?>

    <?php // echo $form->field($model, 'allocated_ram') ?>

    <?php // echo $form->field($model, 'allocated_hard_disk_size') ?>

    <?php // echo $form->field($model, 'network_details') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
