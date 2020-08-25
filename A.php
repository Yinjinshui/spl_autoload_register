<?php 
// __autoload() 函数自动加载
class A{
    public function test(){
        $b_object = new B();
        $b_object->echo_info();
    }
}

function __autoload($classname){
    require $classname.'.php';//include 'b.php';
}

$a_object = new A();
$a_object->test();