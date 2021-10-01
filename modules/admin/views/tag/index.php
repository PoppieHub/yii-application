<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TagSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tags';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="blog-post-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="border-top">
                    <div class="blog-area">
                        <h1><?= Html::encode($this->title) ?></h1>

                        <p>
                            <?= Html::a('Create Tag', ['create'], ['class' => 'btn btn-success']) ?>
                        </p>

                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'id',
                                'name',

                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>