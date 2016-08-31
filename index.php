<?php


	//网站的主入口程序
	
	//自动加载类
	function __autoload($name){
		$name = strtolower($name);//转成小写
		echo $name."<br>";
		if(file_exists("./controller/{$name}.class.php")){
			require("./controller/{$name}.class.php");
		}elseif(file_exists("./model/{$name}.class.php")){
			require("./model/{$name}.class.php");
		}elseif(file_exists("./ORG/{$name}.class.php")){
			require("./ORG/{$name}.class.php");
		}elseif(file_exists("./libs/".ucfirst($name).".class.php")){
			require("./libs/".ucfirst($name).".class.php");
		}elseif(file_exists("./libs/sysplugins/{$name}.php")){
			require("./libs/sysplugins/{$name}.php");
		}else{
			die("错误：没有找到对应{$name}类!");
		}
		
	}
	//数据连接配置文件
	require("./configs/config.php");
	
	//获得参数m的值,并创建对象的Action对象
	$mod = isset($_GET['m']) ? $_GET['m'] : "index";
	//拼装action类名
	$classname = ucfirst($mod)."Controller";
	//创建对象的Action对象
	
	$action = new $classname();
	
	//执行action的初始化（action入口）
	$action->init();
	
	
	
	
	
	
	

			//网站的主入口程序

			//自动加载类
			function __autoload($name){
				$name = strtolower($name);//转成小写
				echo $name."<br>";
				if(file_exists("./controller/{$name}.class.php")){
					require("./controller/{$name}.class.php");
				}elseif(file_exists("./model/{$name}.class.php")){
					require("./model/{$name}.class.php");
				}elseif(file_exists("./ORG/{$name}.class.php")){
					require("./ORG/{$name}.class.php");
				}elseif(file_exists("./libs/".ucfirst($name).".class.php")){
					require("./libs/".ucfirst($name).".class.php");
				}elseif(file_exists("./libs/sysplugins/{$name}.php")){
					require("./libs/sysplugins/{$name}.php");
				}else{
					die("错误：没有找到对应{$name}类!");
				}
			}
			//数据连接配置文件
			require("./configs/config.php");

			//获取参数m的值，并创建对应的Action对象
			$mod = isset($_GET['m'])?$_GET['m']:"index";
			//拼装action类名
			$classname = ucfirst($mod)."Controller";
			//创建对应的Action对象
			
			$action = new $classname();

			//执行action的初始化（action入口）
			$action->init();

