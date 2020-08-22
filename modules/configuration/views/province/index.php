<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\configuration\models\ProvinceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
"<br>";
$this->title = 'Provinces';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-index">

    <div class="form-group col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Create Province', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<br><br><br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'province_id',
            'province_name',
            'created_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
