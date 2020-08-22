<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Department */

$this->title = $model->department_id;
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="department-view">


<div class="form-group">
<div class="row">
<div class="col col-sm-3 col-lg-3">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->department_id], ['class' => 'btn btn-primary btn-block']) ?>
        </div>
        <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Delete', ['delete', 'id' => $model->department_id], [
            'class' => 'btn btn-danger btn-block',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
</div>
</div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'department_id',
            'department_name',
        //'created_by',
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
