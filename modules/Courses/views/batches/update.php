<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\courses\models\Batches */

$this->title = 'Update Batches: ' . $model->batch_id;
$this->params['breadcrumbs'][] = ['label' => 'Batches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->batch_id, 'url' => ['view', 'batch_id' => $model->batch_id, 'batch_name' => $model->batch_name, 'batch_alias' => $model->batch_alias]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="batches-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
