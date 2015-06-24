<?php
/*斐波那契数列&递归方法使用内存存放变量个数*/

$n=10;//Param:n

/*循环*/
$PrintResult=Fibonacci_Circle($n);
echo "Circle:" . "</br>" .  "Fibonacci($n)=" . $PrintResult . 
        "</br>" . "Variable Count:" . $VarCountNow . "</br>". "</br>";

function Fibonacci_Circle($n=3){
    
    global $VarCountNow;
    $LastResult1=1;
    $LastResult2=1;
    $Result;
    for($i=1;$i<=$n;$i++){
        if($i<=2){
            $Result=1;
            $VarCount1=1;
            $VarCount2=1;
            $VarCountNow=1;
        }
        else {
            $Result=$LastResult2+$LastResult1;
            $LastResult2=$LastResult1;
            $LastResult1=$Result;
            $VarCountNow=$VarCount2+$VarCount1+1;
            $VarCount2=$VarCount1;
            $VarCount1=$VarCountNow;
        }
    }
    return $Result;
}

/*递归*/
$PrintResult=Fibonacci($n);
echo "Recursion:" . "</br>" .  "Fibonacci($n)=" . $PrintResult . 
        "</br>" . "Variable Count:" . $VarCount . "</br>". "</br>";

function Fibonacci($n=3,$VarCount=0){
    global $VarCount;
    if($n<3){
        $result=1;
        $VarCount=$VarCount+1;
    } 
    else{
        $result=Fibonacci($n-1)+Fibonacci($n-2);
        $VarCount=$VarCount+1;
    }
    return $result;
}