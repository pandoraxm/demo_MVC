<?php

<<<<<<< HEAD
	/*
	* 网站入口的主controller类
	*/
	class indexController extends Controller{
		//默认入口方法
		public function index(){
			$this->assign("name","zss");
			$this->assign("name1","zss2");
			$this->assign("title","MVC的测试界面");
			$this->display("index.html");
			
		}
		
	}
=======
				/**
				 * 网站入口的主controller类
				 */
				class IndexController extends Controller{
					//默认入口方法
					public function index(){
						$this->assign("name","zzs");
						$this->assign("name1","zzss");
						$this->assign("title","MVC的测试界面");
						$this->display("index.html");
					}
				}
>>>>>>> 51e1a6c72862c7ff86e8fdac2097b23f4a2cb8d1
