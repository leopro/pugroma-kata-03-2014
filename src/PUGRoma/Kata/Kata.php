<?php

namespace PUGRoma\Kata;

class Kata
{
    public function isReady()
    {
        return true;
    }

    public function returnFizzBuzz($int){
        $r="";
        
        $fizz = $int %3 === 0;
        $buzz = $int %5 === 0;
        
        if($fizz AND $buzz){
            return "FizzBuzz?";
        }
        
        if($fizz){
            return "Fizz";
        }
        
        if($buzz){
            return "Buzz";
        }
        
        if($r===""){
           return $int;
        }
        
    }
    
    public function printFizzBuzz($from, $to)
    {
        for($n=$from; $n<=$to; $n++){
            echo $this->returnFizzBuzz($n);
        }
    }
}



