<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'RISE';
?>
<div class="site-index">

    <div id="home">
    	<img src="images/home.png" class="img-teste" />
        <div id="home-content">
            <?= Html::img('images/' . Yii::$app->language . '/logo_rise.png');?>
        	<?= Html::img('images/logos_new.png', array('class'=>'img-logo img-responsive'));?>
        </div>
    </div>

    <?php include_once('about.php');?>
    
    <?php include_once('theme.php');?>
    
    <?php include_once('panels.php');?>

    <?php include_once('boards.php');?>

    <?php include_once('program.php');?>

    <?php include_once('deadline.php');?>

    <?php include_once('infos.php');?>

    <?php include_once('registration.php');?>

    
    <!--
    <div id="contact">
        <div class="row content">
        	<div class="col-lg-6">
	        	<h2><?= Yii::t('app', 'Contacto');?></h2>
	        	<?= Html::mailto('2rise.ufrgs.portoalegre@gmail.com', '2rise.ufrgs.portoalegre@gmail.com'); ?>
			</div>
        </div>
    </div>
    -->
</div>
