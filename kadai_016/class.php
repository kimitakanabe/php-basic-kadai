<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    // クラスを定義する 
    class Food {
      // プロパティを定義する
      private $name;
      private $price;
      //「price」プロパティの値を出力するメソッドを定義する
      public function show_price(){
        echo $this->price;}
      // コンストラクタを定義する
      public function __construct(string $productName, int $productPrice){
        $this->name = $productName;
        $this->price = $productPrice;
      }
    
    }
    // 引数を渡してクラスをインスタンス化する
    $food = new Food('potato', 250);
    //print_r関数を使いインスタンスを出力
    print_r($food);

    echo '<br>';

    // クラスを定義する
    class Animal {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;
      //「height」プロパティの値を出力するメソッドを定義する
      public function show_height(){
        echo $this->height;
      }
      // コンストラクタを定義する
      public function __construct(string $animalName, int $animalHeight, int $animalWeight){
        $this->name = $animalName;
        $this->height = $animalHeight;
        $this->weight = $animalWeight;
      }
    }
    // 引数を渡してクラスをインスタンス化する
    $animal = new Animal('dog', 60, 5000);
    //print_r関数を使いインスタンスを出力
    print_r($animal);

    echo '<br>';
    // メソッドにアクセスして実行する
    echo $food->show_price();

    echo '<br>';
    // メソッドにアクセスして実行する
    echo $animal->show_height();
    ?>
  </p>

</body>
</html>