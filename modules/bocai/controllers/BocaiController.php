<?php

namespace app\modules\bocai\controllers;

use app\modules\bocai\models\Option;
use app\modules\bocai\models\Post;
use yii\web\Controller;

class BocaiController extends Controller
{
    public function actionIndex()
    {
        echo "bocai index";
//        return $this->render('/rank.html');
    }

    public function actionCreatePost()
    {
        $post_title = "first post";
        $post_options = array("opt1","opt2","opt3");

        $post = new Post();
        $post->title = $post_title;
        $post->base_point = 1;
        $post->save();

        echo "saved id:".$post->id;

        $option = new Option();

    }

    public function actionDeletePost()
    {

    }
}
