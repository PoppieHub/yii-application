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
                    <div class="col-md-8">
                        <div class="blog-area">
                            <?php foreach ($query as $item): ?>
                                <div class="blog-area-part">
                                    <?php if (($item['image']) != null): ?>
                                        <?php echo Html::img('@web/img/'.$item['image']) ?>
                                    <?php endif; ?>
                                    <h2><?= $item['heading'];?></h2>
                                    <p><?=  $item['content'];?></p>
                                    <h4><span><?= Yii::$app->formatter->asDatetime($item['publication_date']) ?></span></h4>
                                    <?php if (isset($item['name']) == true): ?>
                                        <h4><span>Категория -<b><?= $item['name'] ?> </b></span></h4>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
