<?php
// PHP OOP
// 클래스 상수

class Base
{
  public const AGE = 25;
  public $mustOlderThan = 21;

  public static function display()
  {
    // echo $this->mustOlderThan;
    echo self::AGE;
  }
}

echo Base::AGE;
// 상수에는 값을 대입할수 없다.
// Base::AGE = 34;

Base::display();

$base = new Base();
// echo $base->mustOlderThan
// $base->mustOlderThan = 220;

echo $base->mustOlderThan;
