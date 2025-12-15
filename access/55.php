<?php
class Fruits
{
  public $name;
  public $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro()
  {
    echo "이 파일 이름은 {$this->name}이고, 색상은 {$this->color} 입니다.";
  }
}

class Mango extends Fruits
{
  public function message()
  {
    echo '나는 망고입니다.';
  }
}

$mango = new Mango('망고', '노랑색');
// $mango->message();
// $mango->intro();

$f = new Fruits('토마토', '붉은색');
$f->intro();
