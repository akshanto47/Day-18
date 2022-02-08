<?php


namespace App\Classes;


class Example
{
    public $i;
    public $name;
    public $data = [];

    public function index()
    {
//       $this->data = [30, 20.20, 'ak shanto', 'true'];
//      foreach ($this->data as $key => $items)
//      {
//          echo $key.'='. $items.'<br/>';
//      }


        $this->data = [
            0 => [
                'name' => 'sagor',
                'email' => 'sagor15@gmail.com',
                'phn' => [
                    'personal' => '01515664932555',
                    ' parents' => '456645856545'
                ],
            ],
            1 => [
                'name' => 'seam',
                'email' => 'sagor15@gmail.com',
                'phn' => [
                    'personal' => '64932555',
                    ' parents' => '46545'
                ],
            ],
            2 => 'bitm',
            3 => [
                'name' => 'sagor',
                'email' => 'sagor15@gmail.com',
                'phn' => '0251654654'
            ]
        ];


//        echo $this->data[2]['name'];

//        foreach ($this->data as $item) {
//            if (is_array($item)) {
//
//                foreach ($item as $value) {
//                    if (is_array($value)) {
//
//                        foreach ($value as $v_value) {
//                            echo $v_value;
//                        }
//                    }
//                    else {
//                        echo $value . '<br/>';
//                    }
//                }
//            }
//            else {
//                echo $item;
//            }
//
//            echo '<br/>';
//        }
//        echo '<pre/>';
//        print_r($this->data);
//        var_dump($this->data);




    }
}