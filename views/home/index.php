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
            <div class="blog-post-area-style">
                <?php if(empty($news)) {
                        echo('<div class="col-md-12"><div class="single-post"><h3>Новостей пока нет.</h3></div></div>');
                      } else {
                            foreach ($news as $post): ?>
                            <div class="col-md-3">
                                <div class="single-post">
                                <?php if (isset($post->image) == true): ?>
                                    <?php echo Html::img('@web/img/'.$post->image, ['width' => '80', 'height' => '150']) ?>
                                <?php endif; ?>
                                    <h3><a href="<?= URL::to(['home/view', 'id' => $post->id]) ?>"><?= $post->heading ?></a></h3>
                                    <p><?= $post->short_description ?></p>
                                    <h4><span><?= Yii::$app->formatter->asDatetime($post->publication_date) ?></span></h4>
                                    <?php if (isset($post->category->name) == true): ?>
                                        <h4><span>Категория -<b><?= $post->category->name ?> </b></span></h4>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php
                        }
                ?>
            </div>
        </div>
    </div>
    <div class="pegination">
        <div class="nav-links">
            <?= LinkPager::widget([
                    'pagination' => $pages,
            ]) ?>
        </div>
    </div>
</section>
