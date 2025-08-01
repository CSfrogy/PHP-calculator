<?php
$result = '';
if(isset($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    if(is_numeric($number1) && is_numeric($number2)) {
     switch($_POST['operator']) {
         case 'add':
             $result = $number1 + $number2;
             break;
         case 'sub':
             $result = $number1 - $number2;
             break;
         case 'multi':
             $result = $number1 * $number2;
             break;
         case 'div':
             $result = ($number2 != 0) ? $number1 / $number2 : "Error: Cannot divide by zero";
             break;
     }
    }
}
