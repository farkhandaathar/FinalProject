<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\configuration\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    

    <p>
    <div class="form-group col col-sm-3 col-lg-3">
        <?= Html::a('Create Country', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </div>
    </p>
<br>
<br>
<br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
       
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'country_id',
            'country_name',
            //'created_at',
           // 'created_by',
           // 'updated_at',
           // 'updated_by',
           // 'is_status',
           [
            'attribute' => 'is_status',
            'label' => 'is_tatus',
            'value' => function ($model){
            return $model->is_status==1?'Active':'Not-Active';
            },
        ],

          
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
