<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
	<link rel="icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.png" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<?php $this->beginBody() ?>
	<div class="wrap">
		<?php
			if(Yii::$app->language == 'en-US')
				$xy = 'English';
			elseif(Yii::$app->language == 'es-ES')
				$xy = 'Español';
			else
				$xy = 'Português';
			NavBar::begin([
				'brandLabel' => 'sase <span class="brand">+</span> rise',
				//'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-inverse navbar-fixed-top',
				],
			]);

			 echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-right'],
				'encodeLabels'=>false,
				'items' => [
					['label' => Yii::t('app', 'Sobre'), 'url' => ['/site/index', '#'=>'about']],
					['label' => Yii::t('app', 'Tema'), 'url' => ['/site/index', '#'=>'theme']],
					['label' => Yii::t('app', 'Mesas'), 'url' => ['/site/index', '#'=>'panels']],
					['label' => Yii::t('app', 'Comités'), 'url' => ['/site/index', '#'=>'boards']],
					['label' => Yii::t('app', 'Programa'), 'url' => ['/site/index', '#'=>'program']],
					['label' => Yii::t('app', 'Fechas'), 'url' => ['/site/index', '#'=>'deadline']],
					['label' => Yii::t('app', 'Info'), 'url' => ['/site/index', '#'=>'infos']],
					['label' => Yii::t('app', 'Inscripciones'), 'url' => ['/site/index', '#'=>'registration']],
					['label' => '<i class="fa fa-globe"></i>',
						'items' => [
							['label' => 'English', 'url' => ['/site/us']],
							['label' => 'Español', 'url' => ['/site/es']],
							['label' => 'Português', 'url' => ['/site/pt']],
						],
					],
					'<li><a href="mailto:2rise.ufrgs.portoalegre@gmail.com"><i class="fa fa-envelope"></i></a></li>',
					Yii::$app->user->isGuest ?
						['label' => '<i class="fa fa-user"></i>', 'url' => ['/site/login']] :
						['label' => '<i class="fa fa-user-times"></i>' /*. Yii::$app->user->identity->name .*/,
							'url' => ['/site/logout'],
							'linkOptions' => ['data-method' => 'post']],
				],
			]);
			NavBar::end();
		?>



		<div>
			<!--<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>-->
			<?= $content ?>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<p>Website developed by <a href='http://www.cegov.ufrgs.br'>CEGOV's IT and Communications Coordinations</a></p>
		</div>
	</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
