
<!DOCTYPE html>
<meta charset="UTF-8">
<h> Типы данных в php </h> <br>

<?php
error_reporting(E_ALL);

/* строка - string
 * целое число - integer
 * дробное число - float (double)
 * булево значение - boolean
 * массивы - array
 * объекты - object
 * нуль - null
 * ресурс - resource
 */

  $string = 'hello world!';
  $integer = 0x5c;
  $float = 2.32;
  $boolean = false; //true
  $array = array("Hello", $integer , $boolean );//одномерные,асоциативные,многомерные

  echo $array[2-1];


  class User {

      public $username ="Владислав";

      public function GetUsername() {
          return $this->username;
      }

  }

  $user = new User;
  $username = $user->GetUsername();
  $null = null;

  $resource = mysqli_connect('localhost','root','');

  ?>
  <pre>
  <?=var_dump($resource) ?>
  </pre>





