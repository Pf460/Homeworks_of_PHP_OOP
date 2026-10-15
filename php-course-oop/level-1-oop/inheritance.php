<?php
/*
 * Принципы ООП:
 *
 * 2.Наследование - какой-то сущности (или нескольким сущностям) нужно повторить то же, что есть у другой сущности, но с какими-то дополнительными возможностями.
 */


class Post
{
    private $title; //замена private на protected - так как наследник не может получать private параметры, а только public и protected
    private $text; //мы можем заменить обратно на private, так как использовали метод parent

    public function __construct(string $title, string $text) //базовое название функции конструктор(сборки нового объекта)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text): void
    {
        $this->text = $text;
    }
}

class Lesson extends Post { //extends - ключевое слово для наследования, показывает от куда класс наследуется
    private $homework;

    public function __construct(string $title, string $text, string $homework)
    {
        parent::__construct($title, $text); // parent::function - метод наследования от родителя части функций в дочерний класс
        $this->homework = $homework;
    }

    public function getHomework(): string
    {
        return $this->homework;
    }

    public function setHomework(string $homework): void
    {
        $this->homework = $homework;
    }
}

$lesson = new Lesson('Заголовок', 'Текст', 'Домашка');
echo 'Название урока: ' . $lesson->getTitle();

echo '<br>';
var_dump($lesson);
/*
 *  private – доступны только внутри этого класса, недоступны в классах-наследниках;
 *  protected – доступны внутри этого класса и всем классам-наследникам. При этом недоступны извне;
 *  public – доступны как внутри объектов класса, так и снаружи – можем напрямую обращаться к ним извне. Доступны классам-наследникам.
 *  Все public-свойства и методы, то есть то, что позволяет нам напрямую взаимодействовать с объектами извне, называются интерфейсом класса.
 */

class PaidLesson extends Lesson {
    private $price;

    function __construct(string $title, string $text, string $homework, float  $price){
        parent::__construct($title, $text, $homework);
        $this->price = $price;
    }
    public function getPrice() : float{
        return $this->price;
    }
    public function setPrice(float $price){
        $this->price = $price;
    }
}

$obj = new PaidLesson('Урок о наследовании в PHP', 'Лол, кек, чебурек', 'Ложитесь спать, утро вечера мудренее', '99.90');
var_dump($obj);