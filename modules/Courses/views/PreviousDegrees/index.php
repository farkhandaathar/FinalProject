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

    <p>
        <?= Html::a('Create Previous Degrees', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'degree_id',
            'degree_name',
            'degree_duration',
            'created_at',
            'created_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
