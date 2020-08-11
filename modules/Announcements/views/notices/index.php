<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\Announcements\models\NoticesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notices-index">

    <h1><?= Html::encode($this->title) ?></h1>
<div class="col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Create Notices', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
</div>
<br><br><br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'notice_id',
            'notice_title',
            'notice_description',
            'notice_user_type',
            'notice_date',
            //'notice_file_path',
            //'created_at',
            //'is_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
