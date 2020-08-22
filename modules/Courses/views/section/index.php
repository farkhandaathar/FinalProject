<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\courses\models\SectionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sections';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-index">

    <div class="form-group col col-sm-3 col-lg-3">

    <p>
        <?= Html::a('Create Section', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
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

            //'section_id',
            'section_name',
            'section_course_id',
            'intake',
           
           'created_at',
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
    
    
    

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
