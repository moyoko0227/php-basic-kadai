<!DOCTYPE html>
<html lang="ja">
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
      

      // コンストラクタを定義する
      public function __construct(string $name , int $price){
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price(){
        echo $this -> price . '<br>';
      }
    }

    
    // インスタンス化する
    $potato = new Food('potato' , 250);
    
    print_r($potato);
    ?>
  </p>

  <p>
    <?php
    // クラスを定義する
    class Animal{
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct(string $name , int $height ,int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      

      public function show_height(){
        echo $this ->height . '<br>';
      }
    }


    // インスタンス化する
    $dog = new Animal('dog' , 60 , 5000);

    print_r($dog);
    ?>
  </p>
  
  <p>
    <?php
    $potato -> show_price();
    $dog -> show_height();
    ?>
  </p>
</body>
</html>