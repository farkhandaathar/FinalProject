<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\ResultRecord\models\ResultSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Results';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="result-index">

    <h1><?= Html::encode($this->title) ?></h1>
<div class="row">
    <div class="col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Create Result', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
    </div>
</div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<br>
<br>
<br>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'student_id',
            'roll_no',
            'registration_no',
            'student_name',
            'father_name', 
            [
        
                'label' =>  'Department',
                'attribute' => 'department',
                'value' =>'department0.department_name',
                        ],
                [
                    'label' => 'Semester',
                'attribute' => 'semester',
                    'value' =>'semester0.semester_name',
                ],
            [
                    'label'=> 'Section',
                    'attribute'=> 'section',
                    'value'=>'section0.section_name',
            ],
            [
                'label' => 'Subject1',
                'attribute'=> 'subject1',
                'value' =>'subject10.subject_name',
            ],
            //'subject1',
            //'subjec1_obtain_marks',
            //'subject1_total_marks',
            //'subject2',
             [
                'label' => 'Subject1',
                'attribute'=> 'subject1',
                'value' =>'subject20.subject_name',
            ],

            //'subject2_obtain_marks',
            //'subject2_total_marks',
            //'subject3',
             [
                'label' => 'Subject1',
                'attribute'=> 'subject1',
                'value' =>'subject30.subject_name',
            ],

            //'subject3_obtain_marks',
            //'subject3_total_marks',
            //'subject4',
             [
                'label' => 'Subject1',
                'attribute'=> 'subject1',
                'value' =>'subject40.subject_name',
            ],

            //'subject4_obtain_marks',
            //'subject4_total_marks',
            //'subject5',
            [
                'label' => 'Subject1',
                'attribute'=> 'subject1',
                'value' =>'subject50.subject_name',
            ],
            //'subject5_obtain_marks',
            //'subject5_total_marks',
            //'subject6', 
            [
                'label' => 'Subject1',
                'attribute'=> 'subject1',
                'value' =>'subject60.subject_name',
            ],

            //'subject6_obtain_marks',
            //'subject6_total_marks',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
 