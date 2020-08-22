<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\Courses\models\Subjects */

$this->title = $model->subject_id;
$this->params['breadcrumbs'][] = ['label' => 'Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="subjects-view">

    <h1><?= Html::encode($this->title) ?></h1>
<div class="row">
<div class="col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->subject_id], ['class' => 'btn btn-primary btn-block']) ?>
        </div>
        <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Delete', ['delete', 'id' => $model->subject_id], [
            'class' => 'btn btn-danger',
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
            'subject_id',
            'subject_code',
            'subject_name',
            'created_at',
            'updated_at',
            //'is_status',
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
