<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <h2><a href="<?= URL::to(['home/index']) ?>">News</a></h2>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="menu">
                        <ul>
                            <li><a href="<?= URL::to(['/home/index']) ?>">Главная</a></li>
                            <li><a href="<?= URL::to(['/admin']) ?>">Админка</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>