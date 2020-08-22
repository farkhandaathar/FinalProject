<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\SecondSemester */

$this->title = $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Second Semesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="second-semester-view">

    <h1><?= Html::encode($this->title) ?></h1>
<div class="row">
<div class="col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Update', ['update', 'student_id' => $model->student_id, 'student_roll_no' => $model->student_roll_no, 'student_registration_no' => $model->student_registration_no], ['class' => 'btn btn-primary btn-block']) ?>
        </div>

        <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Delete', ['delete', 'student_id' => $model->student_id, 'student_roll_no' => $model->student_roll_no, 'student_registration_no' => $model->student_registration_no], [
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
            'student_id',
            'student_roll_no',
            'student_registration_no',
            'student_name',
            'father_name',
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

            'section',
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
