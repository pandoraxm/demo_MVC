<?php
		//stu学生控制器类 实现学生信息的增删改查
		class StuController extends Controller{
			// 属性 定义mod接收model对象
			private $mod = null;
			
			//构造方法 写一个构造方法 产生一个model类 
			public function __construct()
			{
				//执行以下父类的构造方法
				parent::__construct();
				//产生一个数据库的连接对象 
				$this->mod = new Model("stu");

			}

			//1 添加表单

			//2 执行添加

			//3 删除
			public function delete()
			{
				//数据
				$info = $this->mod->del($_GET['id']);
				if($info>0){
					$this->smarty->assign("info","删除成功");
					$this->smarty->display("stu/info.html");
				}else{
					$this->smarty->assign("info","删除失败");
					$this->smarty->display("stu/info.html");
				}
			}
			//4 修改表单

			//5 执行修改 

			//6 显示
			public function index()
			{
				//数据
				$list = $this->mod->findAll();
				// echo "<pre>";
				// print_r($list);
				// var_dump($this->smarty);
				//设置参数
				$this->smarty->assign("vo",$list);

				// //模板输出
				$this->smarty->display("stu/index.html");
			}
			
		}