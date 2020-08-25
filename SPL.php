<?php 
// __autoload() 函数自动加载
class A{
    public function show(){
        $b_object = new B();
        $b_object->echo_info();
    }
}


function __autoload($classname){
	echo 1;
    require $classname.'.php';//include 'b.php';
}





function my_autoload($classname){
	echo 2;
	//echo $classname;exit();
	require $classname.'.php';//include 'b.php';
    //echo 'my_autoload   ';
}


//注册给定的函数作为 __autoload 的实现
spl_autoload_register(my_autoload);
$a_object = new A();
$a_object->show();

var_dump(spl_autoload_functions());
