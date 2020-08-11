

<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
if (Yii::$app->controller->action->id === 'login') {
    echo $this->render(
        'wrapper-black',
        ['content' => $content]
    );
} else {
    dmstr\web\AdminLteAsset::register($this);
    //backend\assets\AppAsset::register($this);
    \app\assets\AppAsset::register($this);
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@bower') . '/admin-lte';
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <style>
    body {
        
       /* background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;*/
       background-image: linear-gradient(#47CACC, #CDB3D4);
             
    }
    .main {
        background-image: linear-gradient(white, white);
        margin: 0px 400px 20px 400px;
        padding: 0px 20px 30px 30px;
        
    }
   
    </style>
    </head>
    <body class="container-fluid">
 
 <?php  $this->beginBody() ?>
<div class="main">
<?= $content ?>
</div>

<?php $this->endBody() ?>


</body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
