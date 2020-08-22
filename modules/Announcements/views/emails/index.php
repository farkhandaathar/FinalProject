<?php

use yii\helpers\Html;
use yii\grid\GridView;
use pceuropa\email\Send;


/* @var $this yii\web\View */
/* @var $searchModel app\modules\Announcements\models\EmailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emails-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Emails', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
  
  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'email_id:email',
            'from',
            'to',
            'subject',
            'text_body',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
