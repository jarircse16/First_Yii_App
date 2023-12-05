<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/css/background.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/css/footer.css">
    <style>
    body{
    background: rgb(2,0,36);
    background: -moz-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,121,9,1) 0%, rgba(38,150,173,1) 0%);
    background: -webkit-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,121,9,1) 0%, rgba(38,150,173,1) 0%);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,121,9,1) 0%, rgba(38,150,173,1) 0%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#020024",endColorstr="#2696ad",GradientType=1);
  }
</style>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!--Navbar Section-->
<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-blue fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Projects', 'url' => ['/site/projects']],
            Yii::$app->user->isGuest
                ? ['label' => 'Admin Panel', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    ?>
</header>

<!-- Rendering the middle of the page-->
<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<!--footer section-->
<footer id="footer" class="mt-auto py-3 bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">&copy; Jarir Ahmed @ Dream71 <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>