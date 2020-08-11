<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name' => 'Graduate School',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],

    // Module start
    'modules' => [
       'configuration' => [
            'class' => 'app\modules\configuration\models',
        ],
        'Courses' => [
            'class' => 'app\modules\Courses\models',
        ],
        'StudentInformation' => [
            'class' => 'app\modules\StudentInformation\StudentsModule',
        ],
        'TeacherInformation' => [
            'class' => 'app\modules\TeacherInformation\models',
        ],
        'StaffInformation' => [
            'class' => 'app\modules\StaffInformation\models',
        ],
        'Announcements' => [
            'class' => 'app\modules\Announcements\models',
        ],
        'auth' => [
            'class' => 'app\Modules\auth\Module',
        ],
        
        'admin' => [
            'class' => 'mdm\admin\Module',
          //  'layout' => 'left-menu', // avaliable value 'left-menu', 'right-menu' and 'top-menu'
            'controllerMap' => [
                 'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    'userClassName' => 'app\models\User',
                    'idField' => 'user_id'
                ]
            ],
            'menus' => [
                'assignment' => [
                    'label' => 'Grand Access' // change label
                ],
                'route' => null, // disable menu
            ],
        ]
        
    ],

    // Module end

    'components' => [
        
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'x77ocOKxhjw5Q33i8C5wabRPqPvcbwm4',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'authManager' => [
           // 'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'.com
            'class' => 'yii\rbac\DBManager',
            'defaultRoles' => ['guest'],
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages', // if advanced application, set @frontend/messages
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        //'main' => 'main.php',
                    ],
                ],
            ],
        ],
	
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        
        /*'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
       
      /*  'view' => [
            'theme' => [
                'pathMap' => [
                   '@app/views' => '@vendor/hail812/yii2-adminlte3/src/views'
                ],
            ],
       ],*/
    ],
   /* 'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
           'site/*',
             'admin/*',
           'some-controller/some-action',
    //'site/login',
         //'site/error',
         
          
          
        ]
        ],*/
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}


return $config;
