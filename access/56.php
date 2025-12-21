<?php
// static

class Car
{
  // private $count = 0;
  private static $count = 0;
  // public static $count = 0;
  private static $carList = [];
  private $name;

  public function __construct($name)
  {
    $this->name = $name;
    // $this->count = $this->count + 1;
    self::$count = self::$count + 1;
    array_push(self::$carList, $name);
  }

  public function message()
  {
    echo '<p>' . $this->name . '가 생산되었습니다.</p>';
    // echo '<p>[생산번호 : ' . $this->count . ']</p>';
    echo '<p>[생산번호 : ' . self::$count . ']</p>';
  }

  public static function getCarList()
  {
    return self::$carList;
  }
}

// public static $count 일떄
// echo Car::$count;

$p1 = new Car('볼보');
$p1->message();

$p2 = new Car('아우디');
$p2->message();

$p3 = new Car('페라리');
$p3->message();

// public static $count 일떄
// echo Car::$count;

$a = implode(',', Car::getCarList());
echo '<p>' . $a . '</p>';
