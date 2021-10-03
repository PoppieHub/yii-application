<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$this->title = 'Просмотор поста';
?>
<section class="blog-post-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="border-top">
                    <div class="blog-area">

                        <h1><?= Html::encode($this->title) ?></h1>
                        <br>
                        <p>
                            <?= Html::a('Загрузить изображение', ['set-image', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
                            <?= Html::a('Добавить категорию', ['set-category', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
                            <?= Html::a('Добавить Тег', ['set-tags', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
                            <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </p>

                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id',
                                'heading',
                                'content:ntext',
                                'short_description:ntext',
                                'image',
                                'publication_date',
                                'category_id',
                            ],
                        ]) ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
