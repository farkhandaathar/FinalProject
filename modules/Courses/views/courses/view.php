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

  <div class="form-group col-4 no-padding">
    <p>
        <?= Html::a('Update', ['update', 'course_id' => $model->course_id, 'course_name' => $model->course_name], ['class' => 'btn btn-primary btn-block']) ?>
        <?= Html::a('Delete', ['delete', 'course_id' => $model->course_id, 'course_name' => $model->course_name], [
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
           // 'course_id',
            'course_name',
            'course_code',
            'course_alias',
            'created_by',
            'created_at',
            'is_status',
        ],
    ]) ?>

</div>
