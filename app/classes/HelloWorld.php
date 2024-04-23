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
    public function __construct()
    {
        $this->message= "Hello World Farhad";
        $this->firstNumber=20;
        $this->secondNumber=30;

    }
    public function index()
    {
//        echo $this->firstName.' &nbsp &nbsp &nbsp'.$this->secondName;

        echo $this->thirdNumber=$this->firstNumber+$this->secondNumber;
        echo '<br/>';

        echo $this->thirdNumber=$this->firstNumber-$this->secondNumber;
        echo '<br/>';

        echo $this->thirdNumber=$this->firstNumber*$this->secondNumber;
        echo '<br/>';

        echo $this->thirdNumber=$this->firstNumber/$this->secondNumber;
        echo '<br/>';

        echo $this->thirdNumber=$this->firstNumber%$this->secondNumber;
        echo '<br/>';
    }

}