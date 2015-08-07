<?php
  //require 'autoload.php';
  //require 'application/models/DBConnect.php';
  /*  $test = new Database();
  try {
  $test->connect();
  } catch(Exeption $e) {
  die($e->__toString());
  }*/
  /*  $test=Database::getInstance();
  echo '<PRE>';
  htmldump($test);
  echo '</PRE>';*/
  // $menu=new Menu();
  //$menu->setItem("test6","test");
  //$menu->getItem();
  // echo '<PRE>';
  //htmldump($menu);
  //print_r ($menu);
  // echo '</PRE>';
  //$test->getLastId();

  //daabase remove


/*  $link = mysqli_connect("localhost", "u_vertumob", "xflolhjr", "vertumob");
  $link2 = mysqli_connect("localhost", "u_vertumob", "xflolhjr", "vertumob_n");
  $query =  "SELECT `Ident`, `name`, `value` FROM `main_menu`";
  $result = mysqli_query($link, $query);
  while ($row = mysqli_fetch_assoc($result))  {
    mysqli_query($link2, "INSERT INTO `menu` (menu_name, menu_value) VALUES ('$row[name]', '$row[value]')");
  }

  $link = mysqli_connect("localhost", "u_vertumob", "xflolhjr", "vertumob");
  $query = "SELECT * FROM `main_menu`";
  $result = mysqli_query($link, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $array[]=$row;
  }

  $link2 = mysqli_connect("localhost", "u_vertumob", "xflolhjr", "vertumob_n");
  foreach ($array as $key => $value) {
    mysqli_query($link2, "INSERT INTO `menu` (menu_name, menu_value) VALUES ('$value[name]', '$value[value]')");
  }*/

class Faz {}
class Baz extends Faz {}
interface Foo {
    public function du(Baz $param);
}
class Boo implements Foo {
    public function du(Baz $param) {
        echo false;
    }
}
$c=new Boo();
$c->du(new Baz());
echo "\n";
echo include 'application/models/Pages.php';
echo "\n";
echo sprintf('"%04d"',1);
echo "\n";

$a = in_array("test", array(0));
var_dump($a);
echo "\n";
$i = array ('c', 'b', 'a');
$j = (array) $i;
var_dump($j);
echo "\n";
echo "\n";

class a {
    function a($x=1) {
        $this->myvar = $x;
    }
}
class b extends a {
    var $myvar;
    function b($x=2) {
        $this->myvar=$x;
        parent::a();
    }
}
$obj = new b;
echo $obj->myvar;
echo "\n";
echo "\n";

class MyClass {
    var $value;
}
$a = new MyClass;
$a->newValue = 1;
$b = $a;
$b->newValue = 2;
echo $a->newValue;
echo "\n";
$nums = array(11,12,13);
foreach($nums as $val) $val++;
print_r($nums);
echo "\n";
ob_start();
echo "Test";
$output = ob_end_clean();
echo $output;

echo "\n";
$a = "12345";
$a[$a[1]] = 2;
echo $a;


$str = 'one|two|three|four';

// positive limit
print_r(explode('|', $str, 2));

// negative limit (since PHP 5.1)
print_r(explode('|', $str, -1));


class Foo2 {
    static function getClassName() {
        return __CLASS__;
    }
}
class Bar2 extends Foo2{}
echo Bar2::getClassName();


?>