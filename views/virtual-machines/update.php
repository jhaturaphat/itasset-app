<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\VirtualMachines $model */

$this->title = 'Update Virtual Machines: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Virtual Machines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="virtual-machines-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
