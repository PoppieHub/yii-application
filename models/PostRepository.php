<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Post;
use yii\db\ActiveQuery;

class PostRepository extends Post
{
    public function getPostWithCategory($id)
    {
        return $query = (new \yii\db\Query())
            ->from(['post'])
            ->where(['post.id'=>$id])
            ->leftJoin('category','post.category_id = category.id')
            ->all();
    }
}
