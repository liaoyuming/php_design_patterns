<?php

/**
 * 将一个类的接口转换成客户希望的另外一个接口。
 * Adapter模式使得原来由于接口不兼容而不能一起工作的那此类可以一起工作
 *
 * 目标(Target)角色：定义客户端使用的与特定领域相关的接口，这也就是我们所期待得到
 * 源(Adaptee)角色：需要进行适配的接口
 * 适配器(Adapter)角色：对Adaptee的接口与Target接口进行适配；适配器是本模式的核心，适配器把源接口转换成目标接口，此角色为具体类
 */


//对象适配器
interface Target {
    public function sampleMethod1();
    public function sampleMethod2();
}

class Adaptee {
    public function sampleMethod1() {
    	echo '#######';
    }
}

class Adapter implements Target {
    private $_adaptee;

    public function __construct(Adaptee $adaptee) {
        $this->_adaptee = $adaptee;
    }

    public function sampleMethod1() {
    	$this->_adaptee->sampleMethod1();
    }

    public function sampleMethod2() {
    	echo '!!!!!!!!';
    }
}


$adapter = new Adapter(new Adaptee());
$adapter->sampleMethod1();
$adapter->sampleMethod2();


//类适配器
interface Target2 {
    public function sampleMethod1();
    public function sampleMethod2();
}

class Adaptee2 { // 源角色
    public function sampleMethod1() {}
}

class Adapter2 extends Adaptee2 implements Target2 { // 适配后角色
    public function sampleMethod2() {}
}

$adapter = new Adapter2();
$adapter->sampleMethod1();
$adapter->sampleMethod2();
