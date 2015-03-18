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
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Kaliémie',
                'brandUrl' => 'http://www.akiyoshi.fr/Kaliemie/frontend/',
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    Yii::$app->user->isGuest ?
                        ['label' => 'Patients', 'url' => ['/site/login']] :
                    ['label' => 'Patients', 'url' => ['/patients/index']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Actes', 'url' => ['/site/login']] :
                    ['label' => 'Actes', 'url' => ['/actes/index']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Actes/Visites', 'url' => ['/site/login']] :
                    ['label' => 'Actes/Visites', 'url' => ['/actes-visites/index']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Capacitées', 'url' => ['/site/login']] :
                    ['label' => 'Capacitées', 'url' => ['/capacite/index']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Visites', 'url' => ['/site/login']] :
                    ['label' => 'Visites', 'url' => ['/visites/index']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Contact', 'url' => ['/site/login']] :
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
