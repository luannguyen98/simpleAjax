<?php

sleep(3);

class SimpleClass{

    var $number1;
    var $number2;
    
    public function __construct($num1=null, $num2=null){
        $this->number1  = $num1;
        $this->number2  = $num2;
    }
    
    public function sum ($num1,$num2){
        if($num1 == null || $num2 == null ){//kiem tra bien truyen vao co rong hay khong
            echo "nhap so vo";
        }
        else if(!is_numeric($num1)||!is_numeric($num2)) echo "input is only number" ;//is_numberic kiem tra bien co phai kieu so hay khong
        else echo $num1 + $num2; //in ra ket qua
    }
    }
    
    $numbers = new SimpleClass();//tao doi tuong SimpleClass
    $numbers->sum($_POST["num1"],$_POST["num2"]); // goi phuong thuc của SimpleClass de su dung
    
?>