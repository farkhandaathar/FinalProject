<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\courses\models\Courses */

$this->title = $model->course_id;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="courses-view">

  <div class="form-group ">
  <div class="row">
    <p>
    <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Update', ['update', 'course_id' => $model->course_id, 'course_name' => $model->course_name], ['class' => 'btn btn-primary btn-block']) ?>
    </div>
    <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Delete', ['delete', 'course_id' => $model->course_id, 'course_name' => $model->course_name], [
            'class' => 'btn btn-danger btn-block',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        </div>
    </p>
</div>
<br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'course_id',
            'course_name',
            'course_code',
            'course_alias',
           
            'created_at',
            [
                'attribute' => 'is_status',
                'label' => 'Status',
                'value' => function ($model){
                return $model->is_status==1?'Active':'Not-Active';
                },
            ],
 [
            'attribute' => 'created_by',
            'label' => 'Created By',
            'value' => function ($model){
            return $model->created_by==1?'Admin':'Staff';
            },
        ],

        ],
    ]) ?>

</div>
