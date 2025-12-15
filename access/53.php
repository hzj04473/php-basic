<?php
// Access Modifiers

// public
// protected
// private

// 예제 1
// class Fruit
// {
//   public $name;
//   protected $color;
//   private $weight;
// }

// $mango = new Fruit();
// $mango->name = 'Mango';
// $mango->color = 'Yellow';
// $mango->weight = '300';

// 예제 2
class Fruit
{
  public $name;
  public $color;
  public $weight;

  function set_name($name)
  {
    $this->name = $name;
    $this->set_color('yellow');
  }

  protected function set_color($color)
  {
    $this->color = $color;
  }

  private function set_weight($weight)
  {
    $this->weight = $weight;
  }
}

$mango = new Fruit();
$mango->set_name('Mango');
// $mango->set_color('yellow');
// $mango->set_weight('300');
