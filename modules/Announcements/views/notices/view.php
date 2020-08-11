<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\Announcements\models\Notices */

$this->title = $model->notice_id;
$this->params['breadcrumbs'][] = ['label' => 'Notices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="notices-view">

    <h1><?= Html::encode($this->title) ?></h1>
<div class="row">
<div class="col col-sm-3 col-lg-3">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->notice_id], ['class' => 'btn btn-primary btn-block']) ?>
        </div>
        <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Delete', ['delete', 'id' => $model->notice_id], [
            'class' => 'btn btn-danger btn-block',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'notice_id',
            'notice_title',
            'notice_description',
            'notice_user_type',
            'notice_date',
            'notice_file_path',
            'created_at',
            'is_status',
        ],
    ]) ?>

</div>
