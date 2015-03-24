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
                'brandLabel' => 'RISE',
                //'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo "<div class='navbar-nav navbar-right'>";
            echo "<a href='#about'>Sobre</a>";
            echo "<a href='#theme'>Tema</a>";
            echo "<a href='#panels'>Mesas</a>";
            echo "<a href='#papers'>Envios</a>";
            echo "<a href='#deadline'>Fechas</a>";
            echo "<a href='mailto:2rise.ufrgs.portoalegre@gmail.com'>Contato</a>";
            echo "</div>";

            NavBar::end();
            /* echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Sobre', 'url' => ['/site/index']],
                    ['label' => 'Tema', 'url' => ['/site/about']],
                    ['label' => 'Mesas', 'url' => ['/site/contact']],
                    ['label' => 'Comités', 'url' => ['/site/contact']],
                    ['label' => 'Cronograma', 'url' => ['/site/contact']],
                    ['label' => 'Envios', 'url' => ['/site/contact']],
                    ['label' => 'Contato', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]); */
            
        ?>

        <div class="">
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
