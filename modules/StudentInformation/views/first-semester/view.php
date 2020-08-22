<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\FirstSemester */

$this->title = $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'First Semesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="first-semester-view">

    <h1><?= Html::encode($this->title) ?></h1>
<div class="row">

    <p>
    <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Update', ['update', 'id' => $model->student_id], ['class' => 'btn btn-primary btn-block']) ?>
    </div>
    <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Delete', ['delete', 'id' => $model->student_id], [
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
            'student_id',
            'student_roll_no',
            'student_registration_no',
            'student_name',
            'father_name',
           // 'department'[
                [
        
                'label' =>  'Department',
                'attribute' => 'department',
                'value' => $model->department0->department_name,
                        ],
                [
                    'label' => 'Semester',
                'attribute' => 'semester',
                    'value' =>$model->semester0->semester_name,
                ],
            [
                    'label'=> 'Section',
                    'attribute'=> 'section',
                    'value'=> $model->section0->section_name,
            ],
            [
               'label'=> 'Batch',
                'attribute' => 'batch',
                'value'=> $model->batch0->batch_name,
            ],
        

           // 'batch',
           // 'section',
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
