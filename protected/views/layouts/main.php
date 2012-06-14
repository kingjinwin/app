<?php $baseUrl = Yii::app()->request->baseUrl; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2132" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/form.css" />

    <link href="<?php echo $baseUrl ?>/css/menu/helper.css" media="screen" rel="stylesheet" type="text/css" />

    <!-- Beginning of compulsory code below -->

    <link href="<?php echo $baseUrl ?>/css/menu/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo $baseUrl ?>/css/menu/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    
<style>
#mapping li {
color:blue;
list-style-type:none;
text-align:left;

}
#mapping .eg {
	color:gray;
	font-size:12px;	
}
</style>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
            'activeCssClass'=>'dir',
            'encodeLabel'=>false,
            'htmlOptions'=>array('class'=>'dropdown dropdown-horizontal'),
			'items'=>array(
                array('label'=>'商品管理','url'=>''),
                array('label'=>'仓库管理','linkOptions'=>array('class'=>'dir'),
                        'items'=>array(
                            array('label'=>'入库','url'=>array('Ebaycate/index&stid=1')),
                            array('label'=>'出库','url'=>array('Ebaycate/index&stid=2')),
                        )),
		array('label'=>'登录','url'=>'?r=Login'),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Superbiiz MIS.<br/>
		All Rights Reserved.<br/>
		<?php #echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

