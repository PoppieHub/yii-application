<?php

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Modal;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
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
                            <h2><a href="<?= URL::to(['/home/index']) ?>">News</a></h2>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="menu">
                            <ul>
                                <li><a href="<?= URL::to(['/home/index']) ?>">Главная</a></li>
                                <li><a href="<?= URL::to(['post/index']) ?>">Посты</a></li>
                                <li><a href="<?= URL::to(['category/index']) ?>">Категории</a></li>
                                <li><a href="<?= URL::to(['tag/index']) ?>">Теги</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main role="main" class="flex-shrink-0">
            <div class="container">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
            </div>
        </main>

        <?= $content ?>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?><?php
