<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use miloschuman\highcharts\Highcharts;
$this->title = 'Dashboard';
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="container-fluid">


<div class="row">
<?php $stuMsg= app\modules\Announcements\models\Events::find()->where('is_status = 0 ')->one();
		if(!empty($stuMsg)) :
		?>
		<div class="callout callout-info msg-of-day">
			    <h4><i class="fa fa-bullhorn"></i> <?php echo  'Upcoming Events' ?></h4>
			    <b><p><marquee onmouseout="this.setAttribute('scrollamount', 6, 0);" onmouseover="this.setAttribute('scrollamount', 0, 0);" scrollamount="6" behavior="scroll" direction="left"><?= $stuMsg->event_description ?></marquee></p></b>
		</div>
        <?php endif; ?>

</div>

    
    <div class="row">
                       <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                      <?= app\modules\StudentInformation\models\Students::find()->where(['student_status' => 'rejoin'])->count(); ?>
                                    </h3>
                                    <p>
                                        <?php echo Yii::t('app', 'Students') ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios-people"></i>
                                </div>
								<?= Html::a(Yii::t('app', 'More info').' <i class="fa fa-arrow-circle-right"></i>', ['/StudentInformation/students/index'], ['target' => '_blank', 'class' => 'small-box-footer']); ?>
                            </div>
                        </div><!-- ./col -->
                        
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                       <?= app\modules\Courses\models\Batches::find()->where(['is_status' => 0])->count(); ?>
                                    </h3>
                                    <p>
                                        <?php echo Yii::t('app', 'Active Batches') ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person"></i>
                                </div>
				<?= Html::a(Yii::t('app', 'More info').' <i class="fa fa-arrow-circle-right"></i>', ['/Courses/batches/index'], ['target' => '_blank', 'class' => 'small-box-footer']); ?>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?= app\modules\Courses\models\Section::find()->where(['is_status' => 0])->count(); ?>
                                    </h3>
                                    <p>
                                        <?php echo Yii::t('app', 'Active Sections') ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
				<?= Html::a(Yii::t('app', 'More info').' <i class="fa fa-arrow-circle-right"></i>', ['/Courses/Section/index'], ['target' => '_blank', 'class' => 'small-box-footer']); ?>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?= app\modules\Courses\models\courses::find()->where(['is_status' => 0])->count(); ?>
                                    </h3>
                                    <p>
                                        <?php echo Yii::t('app', 'Active Courses') ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-sitemap"></i>
                                </div>
                                <?= Html::a(Yii::t('app', 'More info').' <i class="fa fa-arrow-circle-right"></i>', ['/Courses/courses/index'], ['target' => '_blank', 'class' => 'small-box-footer']); ?>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
</div>

<br><br>

 <div class="row">                       <!-- Left col -->
    <div class=" col col-lg-5 col-sm-5">

			<div class="nav-tabs-custom"><!-- .nav-tabs-custom -->
                    <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                    <li><a href="#emp-notice" data-toggle="tab"><?php echo  'Employee'?></a></li>
                    <li><a href="#stu-notice" data-toggle="tab"><?php echo  'Student' ?></a></li>
				    <li class="active"><a href="#all-notice" data-toggle="tab"><?php echo  'General' ?></a></li>
                    <li class="pull-left header" style="<?= (Yii::$app->language == 'ar') ? 'left:35%' : ''; ?>"><i class="fa fa-inbox"></i><?php echo Yii::t('app', 'Notice Board') ?></li>
                </ul>
            <div class="tab-content">
                    <!-- Notice -->
                <div class="tab-pane active" id="all-notice">
					
					<?php $noticeList = app\modules\Announcements\models\Notices::find()->where("is_status = 0")->all();

				    if(!empty($noticeList)) {
					foreach($noticeList as $nl) :
					?>
					<div class="notice-main bg-teal">
						<div class="notice-disp-date"><small class="label label-success"><i class="fa fa-calendar"></i> <?= (!empty($nl->notice_date) ? Yii::$app->formatter->asDate($nl->notice_date) : "Not Set"); ?></small>	
						</div>
						<div class="notice-body">
							 <div class="notice-title"><?= Html::a($nl->notice_title, '#', ['style' => 'color:#FFF', 'class'=>'noticeModalLink', 'data-value'=>Url::to(['dashboard/notice/view-popup','id'=>$nl->notice_id])]); ?>&nbsp; </div>
							 <div class="notice-desc"><?= $nl->notice_description; ?> </div>
                             <br>
						</div>					          
                    </div>
                    
					<?php endforeach; 
				     } else {
						echo '<div class="box-header bg-warning"><div style="padding:5px">';
						echo Yii::t('app', 'No Notice....');
						echo '</div></div>';
				     }
					?>
                </div>
                    
                <div class="tab-pane" id="stu-notice">
					
					<?php $noticeList = app\modules\Announcements\models\Notices::find()->where("is_status = 0 AND notice_user_type = 'Stu'")->all();

				    if(!empty($noticeList)) {
					foreach($noticeList as $nl) :
					?>
					<div class="notice-main bg-teal">
						<div class="notice-disp-date">				
                            <small class="label label-success"><i class="fa fa-calendar"></i> <?= (!empty($nl->notice_date) ? Yii::$app->formatter->asDate($nl->notice_date) : "Not Set"); ?></small>	
						</div>
						<div class="notice-body">
							 <div class="notice-title"><?= Html::a($nl->notice_title, '#', ['style' => 'color:#FFF', 'class'=>'noticeModalLink', 'data-value'=>Url::to(['dashboard/notice/view-popup','id'=>$nl->notice_id])]); ?>&nbsp; </div>
							 <div class="notice-desc"><?= $nl->notice_description; ?> </div>
						</div>					          
					</div>
					<?php endforeach;
				      } else {
						echo '<div class="box-header bg-warning"><div style="padding:5px">';
						echo Yii::t('app', 'No Notice....');
						echo '</div></div>';
				      }
					?>
                </div>
                    
				<div class="tab-pane" id="emp-notice">
					
					<?php $noticeList = app\modules\Announcements\models\Notices::find()->where("is_status = 0 AND notice_user_type = 'TEA'")->all();

				    if(!empty($noticeList)) {
					foreach($noticeList as $nl) :
					?>
					<div class="notice-main bg-teal">
						<div class="notice-disp-date">	
                            <small class="label label-success"><i class="fa fa-calendar"></i> <?= (!empty($nl->notice_date) ? Yii::$app->formatter->asDate($nl->notice_date) : "Not Set"); ?></small>	
						</div>
						<div class="notice-body">
							 <div class="notice-title"><?= Html::a($nl->notice_title, '#', ['style' => 'color:#FFF', 'class'=>'noticeModalLink', 'data-value'=>Url::to(['dashboard/notice/view-popup','id'=>$nl->notice_id])]); ?>&nbsp; </div>
							 <div class="notice-desc"><?= $nl->notice_description; ?> </div>
						</div>					          
					</div>
					<?php endforeach;
				      } else {
						echo '<div class="box-header bg-warning"><div style="padding:5px">';
						echo Yii::t('app', 'No Notice....');
						echo '</div></div>';
				      }
					?>
				</div>
                <br><br>
            </div> <!--  /.tab-content -->
        </div><!-- /.nav-tabs-custom -->
                    </div>



                            <!--Courses section -->
        <div class="col col-sm-4 col-lg-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title <?= (Yii::$app->language == 'ar') ? 'pull-right' : ''; ?>"><i class="ion ion-university"></i> <?php echo Yii::t('app', 'Courses') ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <ul class="todo-list" id="coursList">
				     <?php 
					$courseList = app\modules\Courses\models\Courses::find()->where(['is_status' => 0])->all(); 
					foreach($courseList as $cl) :
				     ?>
                        <li>
                            <span class="handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <span class="text"><?php echo $cl->course_name;?></span>
                            <?php $stuCount = app\modules\StudentInformation\models\Students::find()->where(['degree' => $cl->course_id, ])->count();?>
					        <span class="notification-container <?= (Yii::$app->language == 'ar') ? 'pull-left' : 'pull-right'; ?> text-teal" title="<?= $stuCount; ?> Students"><i class="fa fa-users"></i><span class="label label-info notification-counter"><?= $stuCount; ?></span></span>
                        </li>
				     <?php endforeach; ?>
                </ul>
                </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="col col-sm-3 col-lg-3">
            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                      <?= app\modules\StudentInformation\models\Students::find()->where(['student_status' => 'rejoin'])->count(); ?>
                                    </h3>
                                    <p>
                                        <?php echo Yii::t('app', 'Students') ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios-people"></i>
                                </div>
								<?= Html::a(Yii::t('app', 'More info').' <i class="fa fa-arrow-circle-right"></i>', ['/StudentInformation/students/index'], ['target' => '_blank', 'class' => 'small-box-footer']); ?>
                            </div>
                        </div><!-- ./col -->
            </div>
         </div>


         <!----------------------------------------Calender--------------------------------->
         <br><br>
<div class="row">
    <div class="col col-sm-8 col-lg-8">
</div>

                 
<div class="col col-sm-4 col-lg-4">
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
                    </div>
                    </div>
                    <br><br>

                    