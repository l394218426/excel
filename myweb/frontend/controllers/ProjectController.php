<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Blog;
use app\models\Image;
use common\services\UrlServices;
use common\composers\BaseController;


class ProjectController extends BaseController
{
    public $layout = "public";

    //首页
    public function actionIndex()
    {
      $mail = Yii::$app->mailer->compose();
      $mail->setTo("394218426@qq.com");
      $mail->setSubject('再回首，我心依旧');
      $mail->setHtmlBody('再回首，我心如梦');
   var_dump($mail->send());
   die;
        // var_dump($mail);die;
        $data['data'] = (new image)->find()->all();
        return $this->render('index',$data);
    }

    //游戏中心
    public function actionGames()
    {

        $data['data'] = (new image)->find()->all();
        return $this->render('games',$data);
    }

    //回顾
    public function actionReviews()
    {

        return $this->render('reviews');
    }

    //游戏资讯
    public function actionNews()
    {

        return $this->render('single');
    }

    //博客
    public function actionBlog()
    {
        $blog = new Blog();
        $data['data'] = $blog->find()->all();
        return $this->render('blog',$data);
    }

    //联系我们
    public function actionContact()
    {

        return $this->render('contact');
    }
}