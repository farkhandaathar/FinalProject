<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\Courses\models\Semesters */

$this->title = $model->semester_id;
$this->params['breadcrumbs'][] = ['label' => 'Semesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="semesters-view">

    <h1><?= Html::encode($this->title) ?></h1>
<div class="row">
    <p>
    <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Update', ['update', 'id' => $model->semester_id], ['class' => 'btn btn-primary']) ?>
    </div>
    <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Delete', ['delete', 'id' => $model->semester_id], [
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
            'semester_id',
            'semester_name',
            'created_at',
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
