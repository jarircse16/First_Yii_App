<?php

/** @var yii\web\View $this */
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);

$this->title = 'Jarir Ahmed';
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
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl ?>/css/hover.css">
</head>
<body>
<?php $this->beginBody() ?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Welcome to My Website!</h1>

        <p class="lead">You Will Always Get to Know More About Me! </p>

        <p><a class="btn btn-lg btn-success" href="https://github.com/jarircse16">My Works</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Eating</h2>

                <p>One of my hobbies are eating.
                I eat a lot and there is not much choice distinction while I eat!
                I can eat any kind of edible foods.
              And when my mood is bad I feel like I will eat everything I get! My favourite foods include fastfoods,
            drinks, foods containing spices that will make you cry. I love eating over anything in the worldly things!</p>

                <p><a class="btn btn-lg btn-success" href="https://www.linkedin.com/in/jarir-ahmed-539272155/">My LinkedIn</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Sleeping</h2>

                <p>I love to sleep a lot. It has higher priority than eating. I won't mind if I can't eat up to my throat but I feel
                  very angry if I can't sleep well at night or whenever I wish. Normally making me angry is as difficult as chewing a stone
                without breaking your teeth, but when I can't sleep, it becomes easy as drinking water!</p>

                <p><a class="btn btn-lg btn-success" href="https://www.instagram.com/jarircse16/">My Instagram</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Dreaming</h2>

                <p>Though dreaming sometimes can be uncotrollable, some dreams are lucid and I can watch them as long as I can! Also I can avoid
                nightmares and wake up very fast If I wish to! Dream is not actually what you see when you sleep. Dream is a thought what doesn'temp
              let you sleep! See you later someplace sometime somew.</p>

                <p><a class="btn btn-lg btn-success" href="https://ruetcse.blogspot.com/">My Blog</a></p>
            </div>
        </div>

    </div>
</div>
