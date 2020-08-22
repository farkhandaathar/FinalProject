<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\courses\models\Section */

$this->title = $model->section_id;
$this->params['breadcrumbs'][] = ['label' => 'Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="section-view">

    <div class="form-group">
    <div class="row">
    <div class="col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Update', ['update', 'section_id' => $model->section_id, 'section_name' => $model->section_name], ['class' => 'btn btn-primary btn-block']) ?>
       </div>
       <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Delete', ['delete', 'section_id' => $model->section_id, 'section_name' => $model->section_name], [
            'class' => 'btn btn-danger btn-block',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    </div>

    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'section_id',
            'section_name',
            'section_course_id',
            'intake',
          
            'created_at',
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
