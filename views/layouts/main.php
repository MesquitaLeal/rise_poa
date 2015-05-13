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

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>

</head>
<body>

<?php $this->beginBody() ?>
	<div class="wrap">
		<?php
			NavBar::begin([
				'brandLabel' => 'rise',
				//'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-inverse navbar-fixed-top',
				],
			]);

			 echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-right'],
				'items' => [
					['label' => Yii::t('app', 'Sobre'), 'url' => ['/site/index', '#'=>'about']],
					['label' => Yii::t('app', 'Tema'), 'url' => ['/site/index', '#'=>'theme']],
					['label' => Yii::t('app', 'Mesas'), 'url' => ['/site/index', '#'=>'panels']],
					['label' => Yii::t('app', 'Envios'), 'url' => ['/site/index', '#'=>'papers']],
					['label' => Yii::t('app', 'Fechas'), 'url' => ['/site/index', '#'=>'deadline']],
					['label' => Yii::t('app', 'Contacto'), 'url' => ['/site/index', '#'=>'contact']],
					['label' => Yii::$app->language,
						'items' => [
							['label' => 'English', 'url' => ['/site/us']],
							['label' => 'Español', 'url' => ['/site/es']],
							['label' => 'Português (Brazil)', 'url' => ['/site/pt']],
						],
					],
					Yii::$app->user->isGuest ?
						['label' => 'Login', 'url' => ['/site/login']] :
						['label' => 'Logout (' . Yii::$app->user->identity->name . ')',
							'url' => ['/site/logout'],
							'linkOptions' => ['data-method' => 'post']],
				],
			]);
			NavBar::end();
		?>



		<div>
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<?= $content ?>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
		</div>
	</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
