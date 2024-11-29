<?php
// クラス定義
class Food {
  private $name;
  private $price;

  public function show_price() {
    echo $this->price. '<br>';
  }

  public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
  }
}

class Animal {
  private $name;
  private $height;
  private $weight;

  public function show_height() {
    echo $this->height . '<br>';
  }

  public function __construct(string $name, int $height, int $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }
}

// インスタンス化
$potato = new Food('potato', 250);
$dog = new Animal('dog', 60, 5000);

// インスタンスの出力
print_r($potato);
echo '<br>';
print_r($dog);
echo '<br>';

// メソッドの実行
$potato->show_price();
$dog->show_height();
?>