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

    <div class="form-group col-3 no-padding">
    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'category_id',
            'category_name',
            'created_by',
            'is_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
