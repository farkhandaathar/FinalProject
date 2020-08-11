<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\StudentInformation\models\StudentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-index ">
 <div class="col col-lg-4 col-sm-4">
    <p>
        <?= Html::a('Add New Student', ['create'], ['class' => 'btn btn-success btn-block']) ?>
    </p>
 </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'student_id',
            'student_rollno',
            'student_registration',
            'student_first_name',
            //'student_middle_name',
            'student_last_name',
            //'father_first_name',
            //'father_middle_name',
            //'father_last_name',
            //'student_cnic',
            //'student_gender',
            //'student_dob',
            'student_email:email',
            //'student_phone_no_1',
            //'student_phone_no_2',
            //'guardian_first_name',
            //'guardian_middle_name',
            //'guardian_last_name',
            //'guardian_cnic',
            //'guardian_relation',
            //'guardian_email:email',
            //'guardian_phone_no_1',
            //'guardian_phone_no_2',
            //'student_permanent_address_1',
            //'student_permanent_address_2',
            //'premanent_city_zip_code',
            //'permanent_country_id',
         //   [
           //     'label' => 'Country',
             //   'attribute' => 'permanent_country_name',
               // 'value' => 'permanentCountry.country_name',
                 //],
            //'permanent_province_id',
          //  [
            //    'label' => 'Province',
              //  'attribute' => 'permanent_province_name',
                //'value' => 'permanentProvince.province_name',
                 // ],
          /*  //'permanent_city_id',
            [
                'label' => 'City',
                'attribute' => 'permanent_city_name',
                'value' => 'permanentCity.city_name',
                 ],
            //'student_temporary_address_1',
            //'student_temporary_address_2',
            //'temporary_country_id',
            [
                'label' => 'Country',
                'attribute' => 'temporary_country_name',
                'value' => 'temporaryCountry.country_name',
                 ],
           // 'temporary_province_id',
           [
            'label' => 'Province',
            'attribute' => 'temporary_province_name',
            'value' => 'temporaryProvince.province_name',
             ],
          //  'temporary_city_id',
            //'temporary_city_zip_code',
            [
                'label' => 'City',
                'attribute' => 'temporary_city_name',
                'value' => 'temporaryCity.city_name',
                 ],
           // 'degree',
            [
                'label' => 'Degree',
                'attribute' => 'degree',
                'value' => 'degree0.course_name',
                 ],
                 */
            //'batch',
          //  [
            //    'label' => 'Btach',
              //  'attribute' => 'batch',
                //'value' => 'batch0.batch_name',
                 // ],
           // 'section',
          //  [
            //    'label' => 'Section',
              //  'attribute' => 'section',
                //'value' => 'section0.section_name',
              //   ],
            //'degree_start_date',
            //'degree_end_date',
            //'student_status',
            //'previous_degree_1',
         //   [
           //     'label' => 'Matric',
             //   'attribute' => 'previous_degree_1',
               // 'value' => 'previousDegree1.degree_name',
               //  ],
            //'matric_degree_start_date',
            //'matric_degree_end_date',
            //'matric_marks_obtained',
            //'matric_marks_total',
            //'matric_marks_percentage',
            //'previous_degree_2',
            [
                'label' => 'Intermediate',
                'attribute' => 'previous_degree_2',
                'value' => 'previousDegree2.degree_name',
                 ],
            //'inter_degree_start_date',
            //'inter_degree_end_date',
            //'inter_marks_obtain',
            //'inter_marks_total',
            //'inter_marks_percentage',

            ['class' => 'yii\grid\ActionColumn'],
        
                ],
    ]); ?>


</div>
