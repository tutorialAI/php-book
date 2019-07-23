<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    class ShopProduct {
        // $product1  = new ShopProduct();
        // $product2  = new ShopProduct();

        const CONST_VALUE  = "Lorem ipsum.";

        public $title              = "Стандартный товар";
        public $producerName       = "Фамиля автора";
        public $producerFirstName  = "Имя автора";
        public $price              = 0;
        // public $numPages           = 0;
        // public $playLength         = 0;

        function __construct($title,$producerName,$producerFirstName,$price,$numPages,$playLength){
          $this->title             = $title;
          $this->producerName      = $producerName;
          $this->producerFirstName = $producerFirstName;
          $this->price             = $price;
          $this->numPages          = $numPages;
          $this->playLength        = $playLength;
        }

         function getProducer(){
            return $this->producerFirstName ." ". $this->producerName;
          }
          function getSummaryLine(){
            $base = $this->title ." ( ". $this->producerName;
            $base .= $this->producerFirstName . " ) ";
            return $base;
          }
        }

        class CdProduct extends ShopProduct{
          function getPlayLength(){
            return $this ->playLength;
          }

          function getSummaryLine () {
            $base = $this->title ." ". $this->producerMainName;
            $base .= "(". $this->producerFirstName . ")" ;
            $base .= ": Время звучания - ".$this ->playLength;
            return $base;
          }
        }

        class BookProduct extends ShopProduct{
          function getNumЬerOfPages () {
              return $this->numPages ;
            }
            function getSummaryLine () {
              $base = $this->title. "(". $this->producerMainName;
              $base .= $this->producerFirstName . ")";
              $base .= $this->numPages." стр.";
            return $base ;

            
          }
        }

        $producer2 = new CdProduct(" Пропавший без вести","Группа ", "ДДТ ", 10.99, null, 60.33);
        print "Исполнитель:" . $producer2->getSummaryLine();
        echo "<br>".ShopProduct::CONST_VALUE."<br>";

   ?>
</body>
</html>
