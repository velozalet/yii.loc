<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
                    <?php // $this->title = 'Home'; title для вкладки браузера для этой страницы ?>
    <title><?= Html::encode($this->title ) ?></title> <!--название Зкладки в браузере-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <!--Horizontal NavBar__START-->
    <?php
    NavBar::begin([
        'brandLabel' => 'LITTUS', // Меняем Имя своего Логотипа
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Hello', 'url' => ['/site/hello']],  // добавляем в структуру НавМеню новую хакладку для страницы(hello.php)
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']] :
                [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();
    ?>
    <!--Horizontal NavBar__END--->

<!--MAIN CONTAINER__START-->
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
<!--MAIN CONTAINER__END-->

</div> <!--class="wrap"__END-->

<!--FOOTER__START-->
<footer class="footer">

    <!--NavBar__START-->
    <?php
    NavBar::begin([
        'brandLabel' => 'LITTUS',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-bottom', //navbar-fixed-top
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Hello', 'url' => ['/site/hello']],  // добавляем в структуру НавМеню новую хакладку для страницы(hello.php)
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']] :
                ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']],
        ],
    ]);
    NavBar::end();
    ?>
    <!--NavBar__END-->

    <div class="container">
        <p class="pull-left">&copy; LITTUS <?= '2015 - '.date('Y') ?></p> <!--добавляем свою дату/название/логотип-->
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<!--FOOTER__END-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
