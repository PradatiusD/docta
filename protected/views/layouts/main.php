<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta name="viewport" content="width=device-width" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" media="screen, projector, print">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/app.css" media="screen, projector, print">
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header" class="row">
		<div id="logo" class="three columns small-centered"><img src="http://placehold.it/200x100&text=logo" alt=""><span style="display:none"><?php echo CHtml::encode(Yii::app()->name); ?></span></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/javascripts/vendor/jquery.js"></script>
  
  <script src="<?php echo Yii::app()->request->baseUrl; ?>javascripts/foundation/foundation.js"></script>
  
  <script src="<?php echo Yii::app()->request->baseUrl; ?>javascripts/foundation/foundation.alerts.js"></script>
  
  <script src="<?php echo Yii::app()->request->baseUrl; ?>javascripts/foundation/foundation.clearing.js"></script>
  
  <script src="<?php echo Yii::app()->request->baseUrl; ?>javascripts/foundation/foundation.cookie.js"></script>
  
  <script src="<?php echo Yii::app()->request->baseUrl; ?>javascripts/foundation/foundation.dropdown.js"></script>
  
  <script src="<?php echo Yii::app()->request->baseUrl; ?>javascripts/foundation/foundation.forms.js"></script>
  
  <script src="<?php echo Yii::app()->request->baseUrl; ?>javascripts/foundation/foundation.joyride.js"></script>
  
  <script src="<?php echo Yii::app()->request->baseUrl; ?>javascripts/foundation/foundation.magellan.js"></script>
  
  <script src="<?php echo Yii::app()->request->baseUrl; ?>javascripts/foundation/foundation.orbit.js"></script>
  
  <script src="<?php echo Yii::app()->request->baseUrl; ?>javascripts/foundation/foundation.placeholder.js"></script>
  
  <script src="javascripts/foundation/foundation.reveal.js"></script>
  
  <script src="javascripts/foundation/foundation.section.js"></script>
  
  <script src="javascripts/foundation/foundation.tooltips.js"></script>
  
  <script src="javascripts/foundation/foundation.topbar.js"></script>
  
  
  <script>
    $(document).foundation();
  </script>

</div><!-- page -->

</body>
</html>
