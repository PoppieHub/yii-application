<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this \yii\web\View */
/* @var $searchModel \app\models\PostSearch */
/* @var $dataProvider \yii\data\ActiveDataProvider */

$this->title = 'Посты';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="blog-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="border-top">
                    <div class="blog-area">
                        <h1><?= Html::encode($this->title) ?></h1>

                        <p>
                            <?= Html::a('Создать пост', ['create'], ['class' => 'btn btn-success']) ?>
                        </p>

                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'id',
                                'heading',
                                'content:ntext',
                                'short_description:ntext',
                                'image',
                                //'publication_date',
                                //'category_id',

                                [
                                    'format' => 'html',
                                    'label' => 'Show Image',
                                    'value' => function($data){
                                        return Html::img($data->getImage(), ['width'=>200]);
                                    }
                                ],

                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
