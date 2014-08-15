<?php 
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
));

echo $twig->render('usercentermessage.html', array(
	'title' => 'Twig Testing',
	'sentence' => 'I seem OK.',
	'message' =>  array(array('pageid' => 1 , 'databaseid' => 12, 'sendtime' => '2014-01-27 23:56:58','content'=>'systemtestonly','messagetype'=>'系统消息','isread'=>0,'senderaccount'=>'systemadmin'),array('pageid' => 2 , 'databaseid' =>  22, 'sendtime' => '2014-01-27 23:56:58','content'=>'systemtestonly2','messagetype'=>'账户冻结提示','isread'=>1,'senderaccount'=>'ttest'),array('pageid' =>3 , 'databaseid' => 13, 'sendtime' => '2014-01-27 23:56:58','content'=>'systemtestonly2','messagetype'=>'下级组织转公开申请','isread'=>0,'senderaccount'=>'ttest') ,array('pageid' => 4 , 'databaseid' => 42, 'sendtime' => '2014-01-27 23:56:58','content'=>'systemtestonly2','messagetype'=>'下级列席成员加入申请','isread'=>0,'senderaccount'=>'ttest')  )
));
