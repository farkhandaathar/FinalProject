<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\courses\models\Batches */

$this->title = $model->batch_id;
$this->params['breadcrumbs'][] = ['label' => 'Batches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="batches-view">
    <div class="form-group">
<div class="row">
<div class="col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Update', ['update', 'batch_id' => $model->batch_id, 'batch_name' => $model->batch_name, 'batch_alias' => $model->batch_alias], ['class' => 'btn btn-primary btn-block']) ?>
       </div>
       <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Delete', ['delete', 'batch_id' => $model->batch_id, 'batch_name' => $model->batch_name, 'batch_alias' => $model->batch_alias], [
            'class' => 'btn btn-danger btn-block',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        </div>
    </p>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'batch_id',
            'batch_name',
            'batch_alias',
            'start_date',
            'end_date',
            'created_by',
            [
                'attribute' => 'created_by',
                'label' => 'Created By',
                'value' => function ($model){
                return $model->created_by==1?'Admin':'Staff';
                },
            ],
    [
                    'attribute' => 'is_status',
                    'label' => 'Status',
                    'value' => function ($model){
                    return $model->is_status==1?'Active':'Not-Active';
                    },
                ],
    
    
    
          
        ],
    ]) ?>

</div>
