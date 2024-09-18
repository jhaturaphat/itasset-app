<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MaintenanceRecords $model */

$this->title = 'Create Maintenance Records';
$this->params['breadcrumbs'][] = ['label' => 'Maintenance Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maintenance-records-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
