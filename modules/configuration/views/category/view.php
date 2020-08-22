<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Category */

$this->title = $model->category_id;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="category-view">

<div class="form-group row">

    <p>
    <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Update', ['update', 'id' => $model->category_id], ['class' => 'btn btn-primary btn-block']) ?>
    </div>
    <div class="col col-sm-3 col-lg-3">
        <?= Html::a('Delete', ['delete', 'id' => $model->category_id], [
            'class' => 'btn btn-danger btn-block',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        </div>
    </p>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'category_id',
            'category_name',
           // 'created_by',
            'is_status',
        ],
    ]) ?>

</div>
