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
    class Excavator{
      public $pos = 0;
      public $map = '';
      public $lastPos = 0;

      function __construct($map){
        $this->pos = $pos;
        $this->map = $map;
      }

      public function excavate(){

        $this->pos = strpos($this->map, 'e');
        $this->lastPos = strlen($this->map) - strpos(strrev($this->map), 'b');

        for($i = $this->pos; $i < $this->lastPos; $i++){
          if($this->map[$i] != 'e' && $this->map[$i] != 'b'){
            $this->map[$i] = "_";
          }
        }
        return $this->map;
      }
    }

    $exc = new Excavator('----------------eeee------------b----------');
    $exc2 = new Excavator('---eee--b--e--e--e---e--b-e-bbb-eee----ee---b---------');
    // print $exc2->excavate();

  class Room{
    public $location = '';
    public static $status = '456465';

    public function __construct($location){
      $this->location = $location;
    }

    public function getLocation(){
      return '$this '.$this->location;
    }

    public static function getStatus(){
      static::$status;
    }
  }

  $result = new Room('in room');

  print $result->getLocation()."<br>";
  $result::getStatus();
  print Room::$status;
  ?>
</body>
</html>
