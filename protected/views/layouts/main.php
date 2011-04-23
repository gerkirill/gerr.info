<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/style.css" />
</head>

<body>
	<div id="header">
		<span class="logo"><?php echo CHtml::encode($this->pageTitle); ?></span>
		<?php $this->widget('zii.widgets.CMenu',array(
			'id'=>'menu',
			'items'=>array(
				array('label'=>Yii::t('mainMenu','Home'), 'url'=>array('post/index')),
				array('label'=>Yii::t('mainMenu','About'), 'url'=>array('site/page', 'view'=>'about')),
				array('label'=>Yii::t('mainMenu','Contact'), 'url'=>array('site/contact')),
				array('label'=>Yii::t('mainMenu','Login'), 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>Yii::t('mainMenu','Logout').' ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->translateBreadcrumbs($this->breadcrumbs),
		)); ?><!-- breadcrumbs -->
		<img src="<?php echo Yii::app()->request->baseUrl ?>/images/spacer.gif" alt="setalpm" width="120" height="120" border="0" usemap="#Map" class="rss" />
		<map name="Map">
          <area shape="circle" coords="60,60,63" href="#">
		</map>
	</div>
	<div id="content">
	<?php echo $content; ?>
	</div>
	<div id="footer">
		<p>Copyright &copy;. All rights reserved. Design by <a href="http://www.bestfreetemplates.info" target="_blank" title="Best Free Templates">BFT</a></p>																																																																		<div class="inner_copy"><a href="http://www.beautifullife.info/">beautiful</a><a href="http://www.grungemagazine.com/">grunge</a></div>
	</div>
</body>
</html>
