<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Province */

$this->title = $model->province_id;
$this->params['breadcrumbs'][] = ['label' => 'Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="province-view">

   <div class="form-group col-4 no-padding">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->province_id], ['class' => 'btn btn-primary btn-block']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->province_id], [
            'class' => 'btn btn-danger btn-block',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'province_id',
            'province_name',
            'created_by',
        ],
    ]) ?>

</div>
