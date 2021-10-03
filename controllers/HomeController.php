<?php

namespace app\controllers;

use app\models\PostRepository;
use app\models\Tag;
use Yii;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use app\models\Post;
use yii\web\NotFoundHttpException;

class HomeController extends Controller
{
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Displays homepage.
     */
    public function actionIndex()
    {
        if (Yii::$app->request->isPost){
            $sort = Yii::$app->request->post('sort');

         } else $sort = 0;

        if ($sort == 0){
            $query = Post::find()
                ->orderBy(['publication_date' => SORT_DESC])
                ->with('category')
                ->with('tags');
        } else{
            $query = Post::find()
                ->orderBy(['publication_date' => SORT_ASC])
                ->with('category')
                ->with('tags');
        }

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 8, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $news = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('index', compact('news', 'pages'));
    }

    public function actionView($id)
    {
        $query = (new PostRepository())->getPostWithCategory($id);

        $post = $this->findModel($id);
        $currentTagsName = $post->getCurrentTagsName();

        return $this->render('view', compact('query','currentTagsName'));
    }
}