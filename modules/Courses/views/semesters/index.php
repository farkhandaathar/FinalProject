<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\Courses\models\SemestersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Semesters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="semesters-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
    <div class="col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Create Semesters', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
    </div>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'semester_id',
            'semester_name',
            'created_at',
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
