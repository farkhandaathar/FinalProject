<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\configuration\models\CitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-index">

    <br>
     <div class="form-group col col-sm-3">
    <p>
        <?= Html::a('Create City', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
    </div>
<br><br><br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'city_id',
            'city_name',
            //'created_by',
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
