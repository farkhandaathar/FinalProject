<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\web\JsExpression;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\Announcements\models\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <br>
<div class="col col-lg-3 col-sm-3">
    <p>
        <?= Html::a('Create Events', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
</div>

<br><br><br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= edofre\fullcalendar\Fullcalendar::widget([
        'options'       => [
            'id'       => 'calendar',
            'language' => 'en',
        ],
        'clientOptions' => [
            'weekNumbers' => true,
            'selectable'  => true,
            'defaultView' => 'agendaWeek',
            'eventResize' => new JsExpression("
              function(event, delta, revertFunc, jsEvent, ui, view) {
                   console.log(event);
               }
         "),

        ],
        'events'        => Url::to(['calendar/events','id' => 'event_id' ]),
    ]);
?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           'event_id',
         'event_title',
         'event_description',
            //'event_user_type',
            //'created_at',
          'is_status',

          ['class' => 'yii\grid\ActionColumn'],
    ],
    ]); 
    ?>


</div>
