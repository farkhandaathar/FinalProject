<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\configuration\DesignationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Designations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="designation-index">

   <div class="form-group col col-sm-3 col-lg-3">

    <p>
        <?= Html::a('Create Designation', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
    </div>
<br><br><br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'designation_id',
            'designation_name',
            [
                'attribute' => 'is_status',
                'label' => 'Status',
                'value' => function ($model){
                return $model->is_status==1?'Active':'Not-Active';
                },
            ],
 [
            'attribute' => 'created_by',
            'label' => 'Created By',
            'value' => function ($model){
            return $model->created_by==1?'Admin':'Staff';
            },
        ],



            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
