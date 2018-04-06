<?php

namespace backend\controllers;

use Yii;
use app\models\Blog;
use app\models\Image;
use yii\web\Response;
use app\models\gameUser;
use common\services\UrlServices;
use common\composers\BaseController;


class AdminController extends BaseController
{
	public $layouts = false;
	//首页
	public function actionIndex()
	{
		$image = new Image();
		if($this->isPost())
		{
			$data = $this->post();
			$data['image_url'] = $this->do_upload('image');
			$data['image_time'] = time();
			$image->attributes = $data;
			$res = $image->save();
			if($res)
			{
				$this->alertJump('添加成功','imagelist');
			}
			else
			{
				$this->alertJump('添加失败','image');
			}

		}
		else
		{
			
			return $this->render('index');
		}
	}

	//图片展示
	public function actionImagelist()
	{
		$image = new Image();
		$data['data'] = $image->find()->all();
		return $this->render('image_list',$data);
	}

	//图片添加
	public function actionImage()
	{
		$user['user'] =(new Blog())->find()->all();
		return $this->render('image',$user);
	}

	//图片删除
	public function actionImagedel($id)
	{
		$image = new Image();
		$where['image_id'] = $id;
		$res = $image->findOne($where)->delete();
		if($res)
		{

			$this->alertJump('删除成功','imagelist');
		}
		else
		{

			$this->alertJump('删除失败','imagelist');
		}
	}

	//图片修改
	public function actionImagesave()
	{
		$image = new Image();
		if($this->isPost())
		{

			$data = $this->post();
			$where['image_id'] = $data['image_id'];
			unset($data['image_id']);
			$user = $image->findOne($where);
			$user->attributes = $data;
			if($user->save(0))
			{
				$this->alertJump('修改成功','imagelist');
			}
			else
			{
				$this->alertJump('修改失败','imagesave');
			}
		}
		else
		{

			$id =$this->get('id');
			if($id == '')
			{
				die("非法操作");
			}
			$where['image_id'] = $id;
			$user['data'] = $image->findOne($where);

			return $this->render('image_save',$user);
		}
	}

	//登陆
	public function actionLogin()
	{
		if($this->isPost())
		{
			$name = $this->post('user_name');
			$pwd = md5($this->post('user_pwd'));
			$where['user_name'] = $name; 
			$user = (new gameUser)->findOne($where);
			if(!$user)
			{

				$this->alertJump('账号不存在','login');
			}

			$user_pwd = md5($pwd.$user['key']);

			if($user['user_name'] == $name && $user['user_pwd'] == $user_pwd)
			{

				$this->alertJump('登陆成功','index');
			}
			else
			{

				$this->alertJump('密码错误','login');
			}

		}
		else
		{
			return $this->render('login');
		}
	}

	//帮助
	public function actionHelp()
	{
		return $this->render('help');
	}


	//博客添加
	public function actionBlogadd()
	{
		$blog = new Blog();
		if($this->isPost())
		{	
			$data = $this->post();
			$data['blog_time'] = time();
			$blog->attributes=$data;
			$res = $blog->save(0);
			if($res)
			{
				$this->alertJump('添加成功','bloglist');
			}
			else
			{
				$this->alertJump('添加失败','blog');
			}
		}
		else
		{

			return $this->render('blog_add');
		}
	}

	//博客展示
	public function actionBloglist()
	{
		$data['data'] = (new Blog())->find()->all();
		return $this->render('blog_list',$data);
	}

	//博客删除
	public function actionBlogdel($id)
	{

		$blog = new Blog();
		$where['blog_id'] = $id;
		$res = $blog->findOne($where)->delete();
		if($res)
		{

			$this->alertJump('删除成功','bloglist');
		}
		else
		{

			$this->alertJump('删除失败','bloglist');
		}
	}

	//博客
	public function actionBlog()
	{

		return $this->render('blog');
	}

	//博客修改
	public function actionBlogsave()
	{
		$blog = new Blog();
		if($this->isPost())
		{

			$data = $this->post();
			$where['blog_id'] = $data['blog_id'];
			$user = $blog->findOne($where);
			$user->attributes = $data;
			
			if($user->save(0))
			{

				$this->alertJump('修改成功','bloglist');
			}
			else
			{

				$this->alertJump('修改失败','bloglist');
			}
		}
		else
		{
			$id = $this->get('id');
			if($id == "")
			{
				die('非法操作');
			}
			$where['blog_id'] = $id;
			$user['user'] = $blog->findone($where);
			return $this->render('blog_save',$user); 
		}
	}

}