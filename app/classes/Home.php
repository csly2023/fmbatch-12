<?php


namespace App\classes;


class Home
{
    public $message, $students=[], $item, $value, $key, $v, $index;

    public function __construct()
    {
//        $this->message= 'ok';
//        $this->student=[
//            5=>0,
//            1=>1,
//            2=>2,
//            3=>3,
//            4=>4,
//        ];




//        $this->student=[
//            0=>'aa',
//            'b'=>'b',
//            'c'=>'c',
//            'd'=>'d',
//            'e'=>'e',
//            'f'=>'f',
//            'g'=>'g',
//
//        ];

        $this->students=[
            0=>[
                'name'=>'Rafi',
                'phone'=>[
                    'mobile-1'=>'01518369352',
                    'mobile-2'=>'0111111111',
                ],
                'email'=>'rafi@gmail.com',
                'address'=>'Dhaka',
            ],
            1=>[
                'name'=>'kafi',
                'phone'=>[
                    'mobile-1'=>'01518369352',
                    'mobile-2'=>'0222222222',
                ],
                'email'=>'kafi@gmail.com',
                'address'=>'Dhaka',
            ],
            2=>[
                'name'=>'Safi',
                'phone'=>[
                    'mobile-1'=>'01518369352',
                    'mobile-2'=>'033333333333',
                ],
                'email'=>'safi@gmail.com',
                'address'=>'Dhaka',
            ],
        ];


    }

    public function index(){
//        echo $this->student;
//        echo "<pre>";
//        print_r($this->students);
//        echo '<br>';
//        echo '<br>';
//        var_dump($this->students);
        foreach ($this->students as $this->item){

            foreach ($this->item as $this->key=>$this->value){
//                print_r($this->value);
                if(is_array($this->value)){
                    foreach ($this->value as $this->index=> $this->v){
                        echo $this->index.'='.$this->v;
                        echo "<br>";
                    }
                }else{
                    echo  $this->key.'='. $this->value."<br>";
                }

            }
            echo "<br>";
        }

    }

}