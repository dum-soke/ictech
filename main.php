<?php

															 

return array(

	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',

	'name'=>'Thailand Slot',

	'language' => 'en',



	// preloading 'log' component

	'preload'=>array('log'),



	// autoloading model and component classes

	'import'=>array(

		'application.models.*',

		'application.components.*',

		'application.extensions.*',

	),



	'modules'=>array(

		// uncomment the following to enable the Gii tool

		'gii'=>array(

			'class'=>'system.gii.GiiModule',

			'password'=>'123456',

			// If removed, Gii defaults to localhost only. Edit carefully to taste.

			//'ipFilters'=>array('127.0.0.1','::1'),

			'ipFilters'=>array('*.*.*.*','::1'),

		),

	),



	// application components

	'components'=>array(

		'user'=>array(

			// enable cookie-based authentication

			'allowAutoLogin'=>true,

			'class' => 'CustomWebUser',

		),

		// uncomment the following to enable URLs in path-format



		'urlManager'=>array(

			'urlFormat'=>'path',

			'rules'=>array(

				//'<username:[\w.]+>'=>'user/post',

                //'<username:[\w.]+>/display'=>'image/display',			

				'<controller:\w+>/<id:\d+>'=>'<controller>/view',

				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',

				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

			),

			'showScriptName'=>false,

		),







		/*

		'db'=>array(

			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',

		),

		*/

		// uncomment the following to use a MySQL database

		'db'=>array(

			//'connectionString' => 'mysql:host=localhost;dbname=karuphan_new03',

			'connectionString' => 'mysql:host=150.95.90.78;dbname=slot',

			'emulatePrepare' => true,

			'username' => 'slot-dev',

			'password' => 'Knit2585*',

			'charset' => 'utf8',

		),



		'errorHandler'=>array(

			// use 'site/error' action to display errors

			'errorAction'=>'site/error',

		),

		'log'=>array(

			'class'=>'CLogRouter',

			'routes'=>array(

				array(

					'class'=>'CFileLogRoute',

					'levels'=>'error, warning',

				),

				// uncomment the following to show log messages on web pages

				/*

				array(

					'class'=>'CWebLogRoute',

				),

				*/

			),

		),



        'request'=>array(

            'enableCookieValidation'=>true,

			'enableCsrfValidation'=>true,

			//'baseUrl' => 'http://www.example.com',

        ),



		'clientScript' => array(

			'scriptMap' => array(

				'jquery.js' => false,

				'jquery.min.js' => false,

			),

		),		

		

		'CommonFnc' => array(

			'class'=>'CommonFnc',

        ),	

			

	),

 

	// application-level parameters that can be accessed

	// using Yii::app()->params['paramName']

	'params'=>array(

		'data_ctrl'=>array(	

			'itcenter' => array(

				'dept_id' => '2', 

				'deptgroup_id' => '3', 												

				),	

			'msg' => '',

			),		

		'prg_ctrl'=>array(

  		    'domain' => 'https://dum-soken.online/',  //eg. for set cookie

	        'indextitle' => 'Thailand Slot',

			'pagetitle'	=> ' | Thailand Slot ',

			'logo' => 'https://dum-soken.online/images/common/logo.jpg',

			'noimg' => 'https://dum-soken.online/images/common/no-image.png',

			'daterange' => '1940:2016',

			'authCookieDuration' => 7,  //the duration of the user login cookie in days			

			'diffsvtime' => 0, //เวลาบนเครื่อง webserver ห่างจาก dbserver เท่าไหร่ เช่น 7 หมายถึง webserver ช้ากว่า dbserver 7 ชม

			

			'url' => array(

				'baseurl' => 'https://dum-soken.online/', 

				'upload' => 'https://dum-soken.online/uploads/',											

				'media' => 'https://dum-soken.online/media', 												

				),

			'path' => array(
				/*

				'basepath' => 'F:\thailandslot_new', 				

				'upload' => 'F:\thailandslot_new\uploads', 												

				'media' => 'F:\thailandslot_new\media', 

				*/

				'basepath' => 'https://dum-soken.online/', 				

				'uploads' => 'https://dum-soken.online/uploads/', 								

				'media' => 'https://dum-soken.online/media/', 		

																			

			),		

			'vendor' => array(

				'phpthumb' => array(

					'path' => '\vendor\phpthumb\PhpThumbFactory.php',  		

					/*

					'path' => '/vendor/phpthumb/PhpThumbFactory.php',  	

					*/								

				),	

				'jquery-upload' => array(

					'path' => '\vendor\jquery-upload\UploadHandler.php',				

					'path_intro' => '\vendor\jquery-upload\IntroUploadHandle.php',		

					/*

					'path' => '/vendor/jquery-upload/UploadHandler.php',				

					'path_intro' => '/vendor/jquery-upload/IntroUploadHandle.php',					

					*/						

				),

				'mpdf' => array(

					'path' => '\vendor\mpdf\mpdf.php',  							

					//'path' => '/vendor/mpdf/mpdf.php',  	

													

				),

				'fpdf' => array(

					 'oripath' => '\vendor\fpdf\fpdf.php', 

					 'fontpath' => '\vendor\fpdf\font',

					 'path' => '\vendor\fpdf\customfpdf.php',     

					 //'oripath' => '/vendor/fpdf/fpdf.php', 

					 //'fontpath' => '/vendor/fpdf/font',             

					 //'path' => '/vendor/fpdf/customfpdf.php',   

							 

				),	

				'tcpdf' => array(

					 'oripath' => '\vendor\tcpdf\tcpdf.php', 

					 'path' => '\vendor\tcpdf\customtcpdf.php', 

					 'confpath' => '\vendor\tcpdf\config\tcpdf_config.php', 

				

				),			

			),	

			'pagination' => array(

				'default' => array ( 

					'pagesize' => '40',

					'maxbuttoncount' => '12',

					'maxitem' => '1000',									

				),

			),	 					

		),			 

			



	),

);

