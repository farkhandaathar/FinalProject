<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\courses\models\CoursesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courses-index">

    <div class="form-group col-3 no-padding">
    <p>
        <?= Html::a('Create Courses', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'course_id',
            'course_name',
            'course_code',
            'course_alias',
            'created_by',
            'created_at',
            'is_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
