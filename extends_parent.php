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
      class ShopProduct{
        public $title;
        public $producerName;
        public $producerFirstName;
        public $price;

        function __construct($title,$producerName,$producerFirstName,$price){
          $this->title               = $title;
          $this->producerName        = $producerName;
          $this->producerFirstName   = $producerFirstName;
          $this->price                = $price;
        }

        function getProducer(){
          return $this->producerFirstName ." ".$this->producerName;
        }

        function getSummaryLine(){
          $this-> $this->title."(". $this->producerFirstName ." ".$this->producerName.")"; // потом в дочерним класс добавляетья дополнительная информация ( Время звучания или Количества страниц в книге)
        }

      }

      class CdProduct extends ShopProduct{
        public $playLength;

        function __construct($title,$producerName,$producerFirstName,$price,$playLength){
          parent::__construct($title,$producerName,$producerFirstName,$price); // Здесь мы обратилиь к родительскому конструктору и "скопрированили" его

          $this->playLength = $playLength;
        }

        function getPlayLength(){
          return  " : Время звучания - ".$this->playLength;
        }

        function getSummaryLine(){
          $base = $this->title ." ( ". $this->producerName." ";
          $base .= $this->producerFirstName . " ) ";
          $base .= " : Время звучания - ". $this ->playLength;
          return $base;
        }
      }

      class BookProduct extends ShopProduct{
        public $numPages;
        public $price;

        function __construct($title,$producerName,$producerFirstName,$price,$numPages){
          parent::__construct($title,$producerName,$producerFirstName,$price);

          $this->numPages = $numPages;
          $this->price = $price;
        }

        function getNumЬerOfPages(){
          return $this->numPages;
        }

        function getSummaryLine(){
          $base = $this->title ." ( ". $this->producerName." ";
          $base .= $this->producerFirstName . " ) ";
          $base .= " : Количество страниц - ". $this->numPages;
          $base .= " стоимость - ".  $this->price." рублей";
          return $base;
        }
      }

      $cdDisck = new CdProduct("Kрасавица","Фактор 2","В нашем стиле", "220","3.47");
      // print $cdDisck->getSummaryLine();
      $someBook = new BookProduct("РНР объекты, шаблоны и методики программирования","Мэтт","За ндстра","499","577");
      // print $someBook->getSummaryLine();
      print $someBook->numPages;
   ?>
</body>
</html>
