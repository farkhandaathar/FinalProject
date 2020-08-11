<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\configuration\models\DepartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-index">

    
    <div class="form-group col-4 no-padding">
    <p>
        <?= Html::a('Create Department', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'department_id',
            'department_name',
            'created_by',
            'is_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
