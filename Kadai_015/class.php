<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP_Kadai_015</title>
</head>

<body>
  <p>
    <?php

    // Food クラス*****************************
    class Food{
      // プロパティを定義する
      public $name;
      public $price;
      
      // コンストラクタ
      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }
      // メソッドを定義する
      public function show_price(){
        echo $this->price. '<br>';
      }
    }

    // Animal クラス*****************************
    class Animal{
       // プロパティーの定義
      public $name;
      public $height;
      public $weight;

    // コンストラクタ
    public function __construct(string $name, int $height, int $weight){
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
      }

      // メソッドの定義
      public function show_height(){
        echo $this->height. '<br>';
      }
      };

    // インスタンス化する
    $potato = new Food('potato',250);
    $dog = new Animal('dog',60, 5000);
 
    //出力 
    print_r($potato);
    echo '<br>';
    // var_dump($potato);
    print_r($dog);
    echo '<br>';
    $potato->show_price();
    $dog->show_height();

    ?>
  </p>
</body>
</html>

<!-- 
// メソッドの定義
        public function show_price($price){
          $this->price = $price;
        }


      // インスタンス化
      $tomato = new Food();
      $elephant = new Animal();


 -->