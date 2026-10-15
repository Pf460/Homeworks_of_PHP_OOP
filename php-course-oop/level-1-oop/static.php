<?php
/*
 * свойства и методы, которые принадлежат классу целиком, а не созданным объектам этого класса. То есть использовать их можно даже без создания объектов. Иногда их называют просто свойствами и методами класса.
 * что статические свойства и методы нужны, либо когда нам не требуется объект как таковой, либо его пока нет, но мы хотим создать объект с какими-то значениями по-умолчанию.
 */

//class A {
//    public static function test(int $x)
//    {
//        return 'x = ' . $x;
//    }
//}
//
//echo A::test(5);

class User {
    private $role;

    private $name;

    public function __construct(string $role, string $name)
    {
        $this->role = $role;
        $this->name = $name;
    }
    public static function createAdmin(string $name) //статические методы
    {
        return new self('admin', $name);
    }

}

$admin = User::createAdmin('John');
var_dump($admin);

class A
{
    public static $x;

    public static function getX() //можно работать с такими свойствами и в ствтических объектах
    {
        return self::$x;
    }
}

A::$x = 5;
$a = new A();
var_dump($a::getX());
//со статическими свойствами работа как с константами или методом parent

class Human
{
    private static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }
}
$human1 = new Human();
$human2 = new Human();
$human3 = new Human();
echo 'Людей уже ' . Human::getCount(); // 0


