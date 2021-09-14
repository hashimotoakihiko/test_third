<?php

// //1
// class Vehicle { 
// // ここに処理を追加していきます。 
// } 


// //2
// class Vehicle{ 
//   public $velocity=0;
// } 


// //3
// class Vehicle{ 
//   public $velocity=0;
// } 
// $vehicle = new Vehicle;


//4
// class Vehicle{ 
//   public $velocity=10;
// } 
// $vehicle = new Vehicle;
// echo $vehicle->velocity;


//5
// class Vehicle{ 
//   private $velocity=10;
// } 
// $vehicle = new Vehicle;
// // echo $vehicle->velocity;


//6
// class Vehicle{ 
//   private $velocity=10;
//   public function setVelocity($velocity){
//       echo $velocity;
//   }
// } 
// $vehicle = new Vehicle;
// // echo $vehicle->velocity;
// echo $vehicle->setVelocity(50);


//7
// class Vehicle{ 
//   private $velocity=10;
//   public function setVelocity($velocity){
//       echo $velocity;
//   }
//   public function getVelocity($velocity){
//       echo $velocity;
//   }
// } 
// $vehicle = new Vehicle;
// // echo $vehicle->velocity;
// echo $vehicle->setVelocity(50);
// echo "<br>";
// echo $vehicle->getVelocity(50);


// //8
// class Vehicle{ 
//   private $velocity=10;
//   protected function setVelocity($velocity){
//       echo $velocity;
//   }
//   protected function getVelocity($velocity){
//       echo $velocity;
//   }
// } 
// $vehicle = new Vehicle;
// // echo $vehicle->velocity;
// // echo $vehicle->setVelocity(50);
// // echo "<br>";
// // echo $vehicle->getVelocity(50);



// //9
// class Vehicle{ 
//   private $velocity=10;
//   protected function setVelocity($velocity){
//       echo $velocity;
//   }
//   protected function getVelocity($velocity){
//       echo $velocity;
//   }
// } 
// $vehicle = new Vehicle;
// // echo $vehicle->velocity;
// // echo $vehicle->setVelocity(50);
// // echo "<br>";
// // echo $vehicle->getVelocity(50);

// class Vehicle extends Car {
//     private $color;
//     private $licensePlate;
    
// }


// //10
// class Vehicle{ 
//   private $velocity=10;
//   protected function setVelocity($velocity){
//       echo $velocity;
//   }
//   protected function getVelocity($velocity){
//       echo $velocity;
//   }
// } 
// $vehicle = new Vehicle;
// // echo $vehicle->velocity;
// // echo $vehicle->setVelocity(50);
// // echo "<br>";
// // echo $vehicle->getVelocity(50);

// class Car extends Vehicle {
//     private $color;
//     private $licensePlate;
    
//     public function __construct($velocity = 0, $color = null,$licensePlate = null){
        
//     } 
        
// }
// $car=new Car;


//11
// class Vehicle{ 
//   private $velocity=10;
//   protected function setVelocity($velocity){
//       echo $velocity;
//   }
//   protected function getVelocity($velocity){
//       echo $velocity;
//   }
// } 
// $vehicle = new Vehicle;

// class Car extends Vehicle {
//     private $color;
//     private $licensePlate;
    
//     public function __construct($velocity=0, $color=null,$licensePlate=null){
//         return $this->setvelocity($velocity)."<br>";
       
//     }
// }
// $car=new Car($velocity=100,$color="black",$licensePlate="あ12-34");
// var_dump($color,$licensePlate);


//12
class Vehicle{ 
  private $velocity=10;
  protected function setVelocity($velocity){
      echo $velocity;
  }
  protected function getVelocity($velocity){
      echo $velocity;
  }
} 
$vehicle = new Vehicle;

class Car extends Vehicle {
    private $color;
    private $licensePlate;
    
    public function __construct($velocity=0, $color=null,$licensePlate=null){
        // echo $this->setvelocity($velocity)."<br>";
    }
    public function showProperties($velocity,$color,$licensePlate) {
        echo $this->getvelocity($velocity)."<br>";
        echo $this->getvelocity($color)."<br>";
        echo $this->getvelocity($licensePlate)."<br>";
    }
}
$car=new Car($velocity="velocity:100",$color="color:black",$licensePlate="licensePlate:あ12-34");
$car-> showProperties($velocity,$color,$licensePlate);

//"作成時間：45分"

?>


