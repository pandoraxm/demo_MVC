<?php

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