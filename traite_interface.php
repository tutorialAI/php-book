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
    interface IdentityObject{
      public function generateId();
    }

    trait IdentityTrait{
      public function generateId(){
        return rand(1000,9999);
      }
    }

    trait PriceUtilities{
      private $taxtrate = 17;
      function calculateTax($price){
        return (($this->taxrate / 100 ) * $price);
      }
    }

    class ShopProduct implements IdentityObject{
      public $price = 0;
      use IdentityTrait, PriceUtilities;

      function setPrice($price){
        return $this->price = $price;
      }
    }

  //Здесь, как и в предыдущем примере, в классе ShopProduct используется трейт
  // Identi t yTrai t. Однако импортируемый с его помощью метод generateid () теперь
  // также удовлетворяет требованиям интерфейса I denti t yObj ect. А это означает, что
  // мы можем передавать объекты ShopProduct тем методам и функциям, в описании
  // аргументов которых используются уточнения типа объекта Identi t yObj ect, как показано
  // ниже.

  function storeIdentityObject(IdentityObject $idObj){
    // Работа с объектом типа IdentityObject
    print $idObj->price;
  }

  $p = new ShopProduct();
  $p->setPrice(200);
  storeIdentityObject($p);


  ?>
</body>
</html>
