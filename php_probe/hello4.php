
   <!DOCTYPE html>
   <meta charset="UTF-8">
   <h> Константы в php </h>

   <br>

   <?php
   error_reporting(E_ALL);

  // echo ECHO_CONST;

  define('_MY_FIRST_CONSTANT','1.0');
  // если __  то это волшебная константа..есть 8 шт
  echo _MY_FIRST_CONSTANT.'<br>';

  //echo __LINE__;// 17 строка

  class MyClass{
      const MY_CONSTANT = 34;
      public function get_my_constant() {
          return self::MY_CONSTANT;
      }
  }

  //echo MY_CONSTANT;

  $class = new MyClass();
  echo $class->get_my_constant();