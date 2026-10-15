<?php
//
////Абстрактный класс по сути интерфейс, в котором можно описать логику
//
//abstract class AbstractClass //Создать объект абстрактного класса нельзя – от него можно только наследоваться.
//{
//    abstract public function getValue();
//
//    public function printValue()
//    {
//        echo 'Значение: ' . $this->getValue();
//    }
//}
//
//class ClassA extends AbstractClass
//{
//    private $value;
//
//    public function __construct(string $value)
//    {
//        $this->value = $value;
//    }
//
//    public function getValue() //мы пользуемся публичный геттер
//    {
//        return $this->value;
//    }
//}
//
//$objectA = new ClassA('kek');
//$objectA->printValue(); //обращаемся к функции абстрактного класса, так как ClassA наследуется от AbstractClass

abstract class HumanAbstract
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function getGreetings(): string;
    abstract public function getMyNameIs(): string;

    public function introduceYourself(): string
    {
        return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
    }
}

class RussiaHuman extends HumanAbstract
{
    public function getGreetings(): string
    {
        return 'Привет';
    }

    public function getMyNameIs(): string
    {
        return 'Меня зовут';
    }
}

class EnglishHuman extends HumanAbstract{
    public function getGreetings(): string{
        return 'Hello';
    }

    public function getMyNameIs(): string{
        return 'My name is ';
    }
}

$russian = new RussiaHuman('Иван');
$english = new EnglishHuman('John');

echo $russian->introduceYourself();
echo '<br>';
echo $english->introduceYourself();
