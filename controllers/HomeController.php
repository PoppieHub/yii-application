<?php

namespace app\controllers;

use app\models\PostRepository;
use yii\data\Pagination;
use yii\web\Controller;
use app\models\Post;

class HomeController extends Controller
{
    /**
     * Displays homepage.
     */
    public function actionIndex()
    {
        $query = Post::find()
            ->orderBy(['publication_date' => SORT_DESC])
            ->with('category');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 8, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $news = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('news', 'pages'));
    }

    public function actionView($id)
    {
        $query = (new PostRepository())->getPostWithCategory($id);
        return $this->render('view', compact('query'));
    }
}