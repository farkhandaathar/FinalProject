<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Designation */

$this->title = $model->designation_id;
$this->params['breadcrumbs'][] = ['label' => 'Designations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="designation-view">

    <div class="form-group col-4 no-padding">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->designation_id], ['class' => 'btn btn-primary btn-block']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->designation_id], [
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
            'designation_id',
            'designation_name',
            'created_by',
            'is_status',
        ],
    ]) ?>

</div>
