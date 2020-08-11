<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Country */

$this->title = $model->country_id;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="country-view">

<div class="row" style="margin-top:50px;">
<div class="col col-lg-3 col-sm-3">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->country_id], ['class' => 'btn btn-primary btn-block']) ?>
        </div>
        <div class="col col-lg-3 col-sm-3">
        <?= Html::a('Delete', ['delete', 'id' => $model->country_id], [
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
            //'country_id',
            'country_name',
            //'created_at',
            'created_by',
           // 'updated_at',
            'updated_by',
            'is_status',
        ],
    ]) ?>

</div>
