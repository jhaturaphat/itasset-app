<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Asset $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="asset-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'asset_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'installation_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'purchase_date')->textInput() ?>

    <?= $form->field($model, 'entry_date')->textInput() ?>

    <?= $form->field($model, 'asset_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'warranty_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'ใช้งาน' => 'ใช้งาน', 'ซ่อมบำรุง' => 'ซ่อมบำรุง', 'ปลดระวาง' => 'ปลดระวาง', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'comments')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'os')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hard_disk_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'storage_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'network')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_ports')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
