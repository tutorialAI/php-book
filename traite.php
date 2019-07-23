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
    trait PriceUtilities{
      private $taxrate = 17;

      function calculateTax($price){
        return (($this->taxrate / 100) * $price);
      }
    }

    trait IdentityTrait{
      public function generateId(){
        return rand(1000,9999);
      }
    }

    class ShopProduct{
      use PriceUtilities;
    }

    abstract class Service{

    }

    class UtilityService extends Service {
      use PriceUtilities;
    }

    class Auto{
      use PriceUtilities,IdentityTrait;
    }

    $p = new ShopProduct();

    // print $p->calculateTax(89);

    $autoAudi = new Auto();

    print "id: ".$autoAudi->generateId()."<br>tax-info: ".$autoAudi->calculateTax(78);


  ?>
</body>
</html>
