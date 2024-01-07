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
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
        NavBar::begin([
      
            // hier wordt het type en de stijl van de menu bepaald
              'brandLabel' => Yii::$app->name,  // de naam van het menu
              'brandUrl' => Yii::$app->homeUrl, // de home page waar je naar toe gaat als je op de naam klikt
              'options' => [
                 'class' => 'navbar-inverse navbar-fixed-top', // de Bootstrap 4 style van het menu
               ],
             
          ]);
                         
                         
           echo Nav::widget([
             
             // hier worden de menu's en menu items bepaald
               'options' => ['class' => 'navbar-nav navbar-right'],
               'items' => [
                   [ 'label' => 'Country',
                       'items' => [
                           ['label' => 'Overzicht', 'url' => ['/country/index', ''] ],
                           ['label' => 'Voeg toe', 'url' => ['/country/index/country/Create', ''] ],
                           ['label' => 'Europa', 'url' => ['/country/index', 'CountrySearch[Continent]'=>"Europe"] ],
                           ['label' => 'North America', 'url' => ['/country/index', 'CountrySearch[Continent]'=>"North America"] ],
                           ['label' => 'South America', 'url' => ['/country/index', 'CountrySearch[Continent]'=>"South America"] ],
                           ['label' => 'Asia', 'url' => ['/country/index', 'CountrySearch[Continent]'=>"Asia"] ],
                           ['label' => 'Africa', 'url' => ['/country/index', 'CountrySearch[Continent]'=>"Africa"] ],
                           ['label' => 'Antartica', 'url' => ['/country/index', 'CountrySearch[Continent]'=>"Antartica"] ],
                           ['label' => 'Oceania', 'url' => ['/country/index', 'CountrySearch[Continent]'=>"Oceania"] ],
                           ['label' => 'overzicht', 'url' => ["/country/overzicht"] ],
                           
                       ],
                   ],
                   [ 'label' => 'City',
                       'items' => [
                           ['label' => 'Overzicht', 'url' => ['/country/index', ''] ],
                           ['label' => 'Voeg toe', 'url' => ['/country/index/country/Create', ''] ],
                           ['label' => 'Overzicht Europe', 'url' => ['/country/overzicht-europe', ''] ],
                           
                       ],
                   ],
               ],
               


           ]);
                         
          NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; My Company <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
