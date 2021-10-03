<?php

use yii\helpers\Html;
use yii\helpers\URL;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<section class="blog-post-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="border-top">
                    <div class="col-md-10">
                        <div class="blog-area">
                            <?php foreach ($query as $item): ?>
                                <div class="blog-area-part">
                                    <h2><?= $item['heading'];?></h2>
                                    <?php if (($item['image']) != null): ?>
                                        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                                            <div>
                                                <?= Html::a(Html::img('@web/img/'.$item['image'], ['alt' => ""]),'@web/img/'.$item['image'],['data-caption' => $item['heading']]) ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <br>
                                    <p><?=  $item['content'];?></p>
                                    <h4><span><?= Yii::$app->formatter->asDatetime($item['publication_date']) ?></span></h4>
                                    <?php if (isset($item['name']) == true): ?>
                                        <h4><span>Категория -<b><?= $item['name'] ?> </b></span></h4>
                                    <?php endif; ?>
                                    <div class="article__tags" data-type="tags" data-nosnippet="true">

                                        <?php foreach ($currentTagsName as $tag): ?>

                                            <a aria-disabled="true"><?= $tag ?></a>

                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
