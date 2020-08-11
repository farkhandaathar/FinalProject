<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\Announcements\models\Events */

$this->title = $model->event_id;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="events-view">

    <h1><?= Html::encode($this->title) ?></h1>
<div class="row">
<div class="col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->event_id], ['class' => 'btn btn-primary btn-block']) ?>
</div>
<div class="col col-sm-3 col-lg-3">
        <?= Html::a('Delete', ['delete', 'id' => $model->event_id], [
            'class' => 'btn btn-danger btn-block',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
</div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'event_id',
            'event_title',
            'event_description',
            'event_user_type',
            'created_at',
            'is_status',
        ],
    ]) ?>

</div>
