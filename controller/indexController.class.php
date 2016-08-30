<?php

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