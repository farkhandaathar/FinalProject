<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\ResultRecord\models\Result */

$this->title = $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="result-view">

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
            'roll_no',
            'registration_no',
            'student_name',
            'father_name',
           // 'department',
           // 'semester',
           // 'section',
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
        
           // 'subject1',
           [
               'label' => 'Subject 1',
               'attribute' => 'subject1',
               'value' => $model->subject10->subject_name,
           ],
            'subjec1_obtain_marks',
            'subject1_total_marks',
            
            //'subject2',
            [
               'label' => 'Subject 1',
               'attribute' => 'subject1',
               'value' => $model->subject20->subject_name,
           ],

            'subject2_obtain_marks',
            'subject2_total_marks',
           // 'subject3',
           [
               'label' => 'Subject 1',
               'attribute' => 'subject1',
               'value' => $model->subject30->subject_name,
           ],

            'subject3_obtain_marks',
            'subject3_total_marks',
           // 'subject4',
           [
               'label' => 'Subject 1',
               'attribute' => 'subject1',
               'value' => $model->subject40->subject_name,
           ],

            'subject4_obtain_marks',
            'subject4_total_marks',
           // 'subject5',
           [
            'label' => 'Subject 1',
            'attribute' => 'subject1',
            'value' => $model->subject50->subject_name,
        ],
            'subject5_obtain_marks',
            'subject5_total_marks',
           // 'subject6', 
           [
               'label' => 'Subject 1',
               'attribute' => 'subject1',
               'value' => $model->subject60->subject_name,
           ],

            'subject6_obtain_marks',
            'subject6_total_marks',
        ],
    ]) ?>

</div>
