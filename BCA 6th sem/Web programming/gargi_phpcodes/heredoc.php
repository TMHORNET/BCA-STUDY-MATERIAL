<?php  
class heredocExample{  
        var $demo;  
        var $example;  
        function __construct()  
        {  
                $this->demo = 'DEMO';  
                $this->example = array('Example1', 'Example2', 'Example3');  
        }  
    }  
    $heredocExample =new heredocExample();  
    $name ='krish';  
echo  <<<eco  
My name is "$name". I am printing some $heredocExample->demo example.  
    Now, I am printing {$heredocExample->example[1]}.  
    It will print a capital 'A': \x41  
eco;

?>  