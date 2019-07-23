<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      echo "PHP v - ". phpversion() . "<br>";

      class ShopProduct {
          // $product1  = new ShopProduct();
          // $product2  = new ShopProduct();

          public $title              = "Стандартный товар";
          public $producerName      = "Фамиля автора";
          public $producerFirstName  = "Имя автора";
          public $price              = 0;

          function __construct($title,$producerName,$producerFirstName,$price){
            $this->title             = $title;
            $this->producerName      = $producerName;
            $this->producerFirstName = $producerFirstName;
            $this->price             = $price;
          }

           function getProducer(){
              return $this->producerFirstName ." ". $this->producerName;
            }
          }

      $product1 = new ShopProduct("Собачье сердце","Михаил","Булгаков","5,99");

      print $product1->getProducer();

      // $product1->title = "Собачье сердце";
      // $product1->producerFirstName = "Михаил";
      // $product1->producerName = "Булгаков";
      // $product1->price = "5.99";

      // print "Автор: ". $product1 -> getProducer();




    ?>
    <br><a href="text.txt" download>download</a><br>
    <a href="/extends.php">extends</a><br>
    <a href="/extends_parent.php">extends_parent</a><br>
    <a href="/traite.php">traite</a><br>
    <a href="/traite_interface.php">traite_interface</a><br>
    
    <h4>Practice</h4>
    <a href="./practice/excavator.php">excavator</a>
</body>
</html>
