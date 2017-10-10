<?php

/**
 * 工厂模式 是一种类，它具有为您创建对象的某些方法。您可以使用工厂类创建对象，而不直接使用 new。
 * 这样，如果您想要更改所创建的对象类型，只需更改该工厂即可。使用该工厂的所有代码会自动更改。
 */

class Button{}
class Border{}
class MacButton extends Button{}
class WinButton extends Button{}
class MacBorder extends Border{}
class WinBorder extends Border{}

interface AbstractFactory {
    public function CreateButton();
    public function CreateBorder();
}

class MacFactory implements AbstractFactory{
    public function CreateButton(){ return new MacButton(); }
    public function CreateBorder(){ return new MacBorder(); }
}

class WinFactory implements AbstractFactory{
    public function CreateButton(){ return new WinButton(); }
    public function CreateBorder(){ return new WinBorder(); }
}
