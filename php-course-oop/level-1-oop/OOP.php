<?php
class User
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
}

class Cat
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
}

class Article
{
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, User $author)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): User //тайп-хантинг, что тип может быть взят только из User
    {
        return $this->author;
    }
}

$author = new User('Иван');
$cat = new Cat('Барсик');
//$article = new Article('Заголовок', 'Текст', $cat); //приведёт к ошибке
$article = new Article('Заголовок', 'Текст', $author); //выведет

echo $article->getTitle() . ' ' . $article->getText() .  ' ' . $article->getAuthor()->getName();
