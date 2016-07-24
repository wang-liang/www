<?php
return array(
	//'配置项'=>'配置值'
	/* 数据库设置 */
    //'DB_TYPE'               =>  'pdo',     // 数据库类型
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'wentiku',          // 数据库名
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sc_',    // 数据库表前缀
    
    //'DB_DSN'	=>	'mysql:host=localhost;dbname=myblog;charset=utf8',
    //'DEFAULT_FILTER' => 'trim,htmlspecialchars',  //默认参数过滤方法，用于I()函数

    /**********************图片的相关配置****************************/
    'IMAGE_CONFIG' => array(
    'maxSize' => 1024*1024,
    'exts' => array('jpg','gif','png','jpeg','png'),
    'rootPath' => './Public/Uploads/', //上传图片的保存路径 ->PHP中要使用的路径
    'viewPath' => '/Public/Uploads/', //显示图片时的路径   ->浏览器有的路径，相对网站根目录
    ),
);