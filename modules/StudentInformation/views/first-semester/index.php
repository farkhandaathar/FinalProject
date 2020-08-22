<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\StudentInformation\models\FirstSemesterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'First Semesters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="first-semester-index">

    <h1><?= Html::encode($this->title) ?></h1>
<div class="row">
<div class="col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Create First Semester', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
</div>
</div>
<br>
<br>
<br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'student_id',
            'student_roll_no',
            'student_registration_no',
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
                   'label'=> 'Batch',
                    'attribute' => 'batch',
                    'value'=>'batch0.batch_name',
                ],    
            
            [
                'attribute' => 'is_status',
                'label' => 'Status',
                'value' => function ($model){
                return $model->is_status==1?'Active':'Not-Active';
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
