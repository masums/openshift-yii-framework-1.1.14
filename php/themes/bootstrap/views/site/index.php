<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>

<p>Congratulations! You have successfully created your Yii application.</p>

<?php $this->endWidget(); ?>

<strong>For bootstrap control and example please visite <a target="_blank" href="http://cniska.net/yii-bootstrap/index.html">Bootstrap Controls</a></strong>
<br/>
<br/>
<p>You may change the content of this page by modifying the following two files:</p>

<ul>
    <li>View file: <code> /themes/bootstrap/views/site/index.php </code></li>
    <li>Layout file: <code>/themes/bootstrap/views/layouts/main.php</code></li>
	<li>Database Access: 
		<code>
			Create database tables from OpenShift PhpMyAdmin panel.
			<br/>From your main config file enable gii module and add your IP.
			<br/>Then you will be able to start gii and connect with your database for CRUD operation
		</code>
	</li>
	
</ul>

<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>
<p>
	Quick Start application is prepared by <a target="_blank" href="http://masums.com">Md. Rashidul Hasan Masum</a>
	<br/> If you fetch any problem to install this application please feel free to email me at
	<br/> masum@masums.com
	<br/>
	Thanks for using this application
</p>
