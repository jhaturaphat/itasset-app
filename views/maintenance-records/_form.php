<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MaintenanceRecords $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maintenance-records-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'server_id')->textInput() ?>

    <?= $form->field($model, 'maintenance_start_date')->textInput() ?>

    <?= $form->field($model, 'maintenance_end_date')->textInput() ?>

    <?= $form->field($model, 'maintenance_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'post_maintenance_status')->dropDownList([ 'ใช้งานได้' => 'ใช้งานได้', 'ใช้งานไม่ได้' => 'ใช้งานไม่ได้', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'last_usage_log')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'responsible_person')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'additional_notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
