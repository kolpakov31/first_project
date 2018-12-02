
<!DOCTYPE html>
<meta charset="UTF-8"



<?php

// Урок 1 и 2

echo '<h1> Привет мир!</h1>';

 // Коментарии в одну строку
 # Коментарий в одну строку
 /*
 многострочный коментарий
 */

  $x = $z +/* $r+ */ $c;

?>

<h2>Синтаксис PHP</h2>
<h3>Переменные и область видимости <h3>
<h1> Заголовок </h1>

<?php

   $reGistr = 'registr1';
   $registr = 'registr2';

  // echo $reGistr;

  // $string = $reGistr.'Конкатенация-это точка'.$registr;

  // ECHo $string;

     echo $reGistr.'Конкатенация'.$registr. '<br>';


     error_reporting(E_ALL);

     $x = 10;
     $y = 11;
     function test(){
         global $x,$y;

         echo $x.'<br>';
         echo $y.'<br>';
     }

     test();

      function test1(){
          static $z = 0 ;
          $z++;
          echo $z.'<br>';
      }

      test1();
      test1();
      test1();
      test1();
      test1();
      test1();
      test1();
      test1();

    echo $GLOBALS['x'];

    echo '<pre>';
    print_r($GLOBALS);