<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\TeacherInformation\models\TeachersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-index ">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Teachers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'teacher_id',
            'teacher_first_name',
            'teacher_middle_name',
            'teacher_last_name',
            'father_first_name',
            //'father_middle_name',
            //'father_last_name',
            //'teacher_cnic',
            //'teacher_gender',
            //'teacher_dob',
            //'teacher_email:email',
            //'teacher_phone_no_1',
            //'teacher_phone_no_2',
            //'teacher_address_line_1',
            //'teacher_address_line_2',
            //'teacher_country_id',
            //'teacher_province_id',
            //'teacher_city_id',
            //'teacher_city_zip_code',
            //'company_name_1',
            //'post_name_1',
            //'start_date_1',
            //'end_date_1',
            //'company_name_2',
            //'post_name_2',
            //'start_date_2',
            //'end_date_2',
            //'teacher_joining_date',
            //'teacher_department_id',
            //'teacher_designation_id',
            //'teacher_category_id',
            //'teacher_experience',
            //'teacher_course_id',
            //'teacher_batch_id',
            //'teacher_section_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
