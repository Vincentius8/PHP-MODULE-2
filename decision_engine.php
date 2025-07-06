<?php
/*
//if statement  sample code: 
if( 5 > 3){ //conditiio
    echo "Great"; //output
} */


/*
//if else statement sample code:
if (1 > 4 ){ //
    echo"True"; // if the statement is true, this will be executed
}else{
    echo "False"; // if the statement is false this will be exceuted
} */



//if else statement using variables sample code:
/*
$num1 = 30;
$num2 = 20;

if($num1 < $num2){
    echo "true Num1 is less than Num2";
}else{
    echo "The Num2 is Greater than Num1";
    }*/

/*

// if elseif else statement sample code with Variables:
    $age1 = 18;
    $age3 = 13;
    $age = 18;

    if ($age >= $age1 ){
        echo "Welcome to the Club Big Fella!Come in!";
    }elseif($age >= $age3){
        echo"Need a parent consult lil boy!";
    }else{
        echo"What the fuck are doing here kid?!Get out of here!!";
    } */


    //Switch Statement sample code:
    $days = "1";
    
    switch($days){
        case 1: 
            echo "Today is Monday!Have a nice day!";
            break;
        case 2:
            echo "Today is Tuesday!Have a nice day!";
            break;
        case 3:
            echo "Today is Wednesday!Have a nice day!";
            break;
        case 4:
            echo "Today is Thursday!Have a nice day!";
            break;
        case 5:
            echo "Today is Friday!Have a nice day!";
            break;
        case 6:
            echo "Today is Saturday!Have a nice day!";
            break;
        case 7:
            echo "Today is Sunday!Have a nice day!";
            break;
       default:
       echo "You're out of mind";   
    }
?>