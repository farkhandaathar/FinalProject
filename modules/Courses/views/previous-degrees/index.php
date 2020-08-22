<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\Courses\models\PreviousDegreesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Previous Degrees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="previous-degrees-index">

    <h1><?= Html::encode($this->title) ?></h1>
<div class="row">
<div class="col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Create Previous Degrees', ['create'], ['class' => 'btn btn-success']) ?>
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

           // 'degree_id',
            'degree_name',
            'degree_duration',
           // 'created_at',
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
