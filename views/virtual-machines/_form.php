<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\VirtualMachines $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="virtual-machines-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'server_id')->dropdownList($model->getServerId()) ?>

    <?= $form->field($model, 'vm_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vm_asset_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'os')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allocated_cpu')->textInput() ?>

    <?= $form->field($model, 'allocated_ram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allocated_hard_disk_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'network_details')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'กำลังใช้งาน' => 'กำลังใช้งาน', 'หยุดทำงาน' => 'หยุดทำงาน', 'อื่นๆ' => 'อื่นๆ', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
