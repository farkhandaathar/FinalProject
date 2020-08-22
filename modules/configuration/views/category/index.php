<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\configuration\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <div class="form-group col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success btn-block']) ?>
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

           // 'category_id',
            'category_name',
            //'created_by',
            //'is_status',
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
