<?php
class Fruit2
{
  // Properties
  private $name;
  public $color;

  // 생성자 constructor
  function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  // Methods

  function get_name()
  {
    return $this->name;
  }

  function get_color()
  {
    return $this->color;
  }
}

// 생성자 constructor
$apple = new Fruit2(name: 'Apple', color: 'Red');
$banana = new Fruit2(name: 'Banana', color: 'Yellow');

echo '이 과일의 이름은 ' . $apple->get_name();
echo '이고, 색깔은' . $apple->get_color();
echo '입니다.<br />';

echo '이 과일의 이름은 ' . $banana->get_name();
echo '이고, 색깔은' . $banana->get_color();
echo '입니다.<br />';
