<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\courses\models\BatchesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Batches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="batches-index">

   <div class="form-group col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Create Batches', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
    </div>
<br><br><br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'batch_id',
            'batch_name',
            'batch_alias',
            'start_date',
            'end_date',
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
