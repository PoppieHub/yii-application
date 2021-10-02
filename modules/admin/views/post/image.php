<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<section  class="post-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="border-top">
                    <div class="blog-area">
                        <?php $form = ActiveForm::begin(); ?>

                        <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
</div>
</section >
