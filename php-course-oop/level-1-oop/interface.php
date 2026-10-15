<?php
/*
 * Интерфейсы в PHP
 */

//instanceof - С её помощью можно понять, является ли объект экземпляром какого-то класса, или реализует интерфейс. Эта конструкция возвращает true или false.

interface calculateSquare { //interface - ключевое слово для создания интерфейсов - это описание public методов, которые представляют собой только название метода, описание их аргументов и возвращаемый тип. Тело метода в интерфейсе не описывается.
    public function calculateSquare() : float;
}
class Rectangle
{
    private $x;
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateSquare(): float
    {
        return $this->x * $this->y;
    }
}

class Square implements CalculateSquare
{
    private $x;

    public function __construct(float $x)
    {
        $this->x = $x;
    }

    public function calculateSquare(): float
    {
        return $this->x ** 2;
    }
}

class Circle implements calculateSquare //Чтобы обязать класс реализовать этот интерфейс нужно использовать слово implements после имени класса. Один класс может реализовать несколько элементов
{
    const PI = 3.1416; //константы определяются ключевым словом const
    private $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function calculateSquare(): float
    {
        return self::PI * ($this->r ** 2); //вызываются переменный с помощью self:: - обозначает текущий класс либл может вызываться по имени класса
    }
}

//get_class($object) - возвращает имя класса объекта

$objects = [
    new Square(10),
    new Rectangle(12, 11),
    new Circle(2.5)

];

foreach ($objects as $object) {
    if ($object instanceof calculateSquare) {
        echo 'Объект класса ' . get_class($object) . ' реализует интерфейс CalculateSquare. Площадь: ' . $object->calculateSquare();
        echo '<br>';
    }
    else {
        echo 'Объект класса ' . get_class($object) . ' не реализует интерфейс CalculateSquare.';
        echo '<br>';
    }
}

