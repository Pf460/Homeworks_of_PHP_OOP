<?php

/*
 * Принципы ООП:
 *
 * 1.Инкапсуляция - размещение в оболочке, изоляция, закрытие чего-либо с целью исключения влияния на окружающее
 */

class Cat //класс
{
    private $name; //Модификатор private - Он позволяет сделать свойства и методы объекта приватными, после этого они будут доступны только внутри этого объекта.
    private $color;
    public $weight;

    //Как и в любом классе, мы можем определить функцию
    public function sayHello() {
        echo 'Привет! Меня зовут ' . $this->name . '. У меня ' . $this->color . ' окрас.'; //$this - специальная переменная обозначающая текущий объекта
    }
    public function setName(string $name) { //Чтобы передать что-либо в приватную переменную мы можем использовать публичную функцию
        $this->name = $name;
    }
    public function setColor(string $color) {
        $this->color = $color;
    }
    public function getColor(): string {
        return $this->color;
    }
    public function getName(): string {
        return $this->name;
    }
}

$cat1 = new Cat(); //объект
$cat1->setName( "Снежок"); //Заполнение объекта
$cat1->setColor("Белый");
$cat1->weight = 3.5;
$cat1->sayHello();

echo '<br>' . $cat1->getName() . '<br>';
echo  $cat1->getColor() . '<br>';

var_dump($cat1);

$cat2 = new Cat();
$cat2->setName('Барсик');
$cat2->setColor('Рыжий');
$cat2->weight = 6.4;
$cat2->sayHello();

echo '<br>' . $cat2->getName() . '<br>';
echo  $cat2->getColor() . '<br>';

var_dump($cat2);
