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

    <div class="form-group col-4 no-padding">

    <p>
        <?= Html::a('Update', ['update', 'section_id' => $model->section_id, 'section_name' => $model->section_name], ['class' => 'btn btn-primary btn-block']) ?>
        <?= Html::a('Delete', ['delete', 'section_id' => $model->section_id, 'section_name' => $model->section_name], [
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
           // 'section_id',
            'section_name',
            'section_course_id',
            'intake',
            'created_at',
            'created_by',
            'is_status',
        ],
    ]) ?>

</div>
