<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public $firstName="BITM";
    public $secondName="BASIS";

    public $firstNumber;
    public $secondNumber;
    public $thirdNumber;
    public $x;
    public $y;
    public function __construct()
    {
        $this->message= "Hello World Farhad";
//        $this->firstNumber=20;
//        $this->secondNumber=30;

        $this->x=40;
        $this->y=50;
        $this->z=60;




    }
    public function index()
    {
//        echo $this->firstName.' &nbsp &nbsp &nbsp'.$this->secondName;

//        echo $this->thirdNumber=$this->firstNumber+$this->secondNumber;
//        echo '<br/>';
//
//        echo $this->thirdNumber=$this->firstNumber-$this->secondNumber;
//        echo '<br/>';
//
//        echo $this->thirdNumber=$this->firstNumber*$this->secondNumber;
//        echo '<br/>';
//
//        echo $this->thirdNumber=$this->firstNumber/$this->secondNumber;
//        echo '<br/>';
//
//        echo $this->thirdNumber=$this->firstNumber%$this->secondNumber;
//        echo '<br/>';

//        echo '<br>';
//        echo $this->firstNumber++;
//        echo '<br>';
//        echo $this->firstNumber;
//        echo '<br>';
//        echo $this->firstNumber;

//        echo '<br>';
//        echo $this->x+=$this->y;
//        echo '<br>';
//        echo $this->x-=$this->y;
//        echo '<br>';
//        echo $this->x*=$this->y;
//        echo '<br>';
//        echo $this->x/=$this->y;
//        echo '<br>';
//        echo $this->x%=$this->y;
//        echo '<br>';
//        echo $this->x .=$this->y;
//        echo '<br>';


        echo '<br>';
//        echo ($this->x < $this->y) && ($this->y < $this->z);
//        echo '<br>';
//        echo ($this->x > $this->y) && ($this->y > $this->z);
//        echo '<br>';
//        echo ($this->x < $this->y) && ($this->y < $this->z);
//        echo '<br>';
//        echo ($this->x < $this->y) && ($this->y > $this->z);
//        echo '<br>';
//        echo ($this->x > $this->y) && ($this->y < $this->z);


$this->x =100;
$this->y =100;
$this->z =$this->x+$this->y;
//
//if($this->x > $this->y){
//    echo $this->z;
//}
//elseif ($this->y < $this->z){
//    echo "hello php";
//}
//elseif ($this->z > $this->x){
//    echo "hello bitm";
//}
//else{
//    echo "Hello Laravel";
//}


//switch ($this->x){
//    case 100:
//        echo "hello world";
//        break;
//
//    case 200:
//        echo "hello bangladesh";
//        break;
//
//    case 300:
//        echo "hello bitm";
//        break;
//
//    default:
//        echo "hello php";
//}

//        for ($this->x=15; $this->x>=7; $this->x--){
//            echo $this->x;
//            echo "<br>";
//        }

//        $this->x=15;
//        while ($this->x<20){
//            echo $this->message;
//            $this->x++;
//        }

        $this->x=15;
        do{
            echo $this->message;
            $this->x++;
        }
        while($this->x<17);




    }

}