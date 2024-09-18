<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\VirtualMachines $model */

$this->title = 'Create Virtual Machines';
$this->params['breadcrumbs'][] = ['label' => 'Virtual Machines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="virtual-machines-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
