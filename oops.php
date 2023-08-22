<?php
    class fruit {
        public $name;
        public $color;

        function set_name ($name){
            $this ->name = $name;
        }
        // CONSTRUCTOR
        function __construct($name ,$color){
            $this ->name = $name;
            $this ->color = $color;
            echo "constructor called <br>";
        }
        // DESTRUCTOR
        function __destruct(){
            echo "<br> destructor called {$this ->name}. <br>";
        }

        function get_name(){
            echo "<br>";
           return $this ->name;
        }
        function get_color(){
            echo "<br>";
           return $this ->color;
        }
    }
    //INHERITANCE 
    class strawberry extends fruit{
        public function message(){
            echo "child class";
        }
    }
    $apple = new fruit("Apple" ,"Red");
    echo $apple -> get_name();
    echo $apple -> get_color();
    $berry = new strawberry('strawberry' ,"Red");
    $berry ->message();
?>

 <!-- CONSTANT -->
<?php
    class goodbye {
        const leaving_message = "<br>Thanks<br>";
        const leaving = "<br>Thanks you <br>";
    }
    echo goodbye :: leaving_message;
    echo goodbye :: leaving;
?>

<!-- ABSTRACTION -->
<!-- ABSTRACT FUNCTION CONTAINS ATLEAST 1 ABSTRACT FUNCTION
ABSTRACT FUNCTION MUST DECLARE BUT NOT IMPLEMENT
CHILD CLASS MUST CONTAIN ABSTRACT FUNCTION  -->
<?php
    abstract class bank{
        abstract function id_proof();
    }
    class hdfc extends bank{
        function id_proof(){
            echo "test";
        }
    }
?>

<!-- INTERFACE  -->
<!-- INTERFACE SUPPORT MULTIPLE INHERITANCE
INTERFACE CAN ONLY CONTAIN ABSTRACT FUNCTION
IN INTERFACE WE CANNOT DEFINE VARIABLES
NO CONSTRUCTOR IN INTERFACE
ALL FUNCTION MUST BE PUBLIC -->
<?php
interface class1{
    public function test1();
}
interface class2{
    public function test2();
}
class class3 implements class1,class2{     //IMPLEMENTS IS USED TO INHERIT TWO CLASS
    public function test1(){
        echo "Test1";
    }
    public function test2(){
        echo "Test2";
    }
}
$obj = new class3();
echo $obj -> test2();
?>

<!-- TRAITS -->
<!-- USED WHEN WE DONT WANT A CLASS TO ACCESS PARENT CLASS FUNCTIONS -->
<?php
trait class11{
    function func11(){
        echo "<br>func11<br>";
    }
}
class class22{
    use class11{
        // t1::func1 insteadOf t2;    USED WHEN WE HAVE SAME FUNCTION IN TWO TRAITS
    }
    function func22(){
        echo "<br>func22<br>";
    }
}
class class44{
    function func44(){
        echo "<br>func44<br>";
    }
}
$object = new class22();
$object ->func11();
?>

<!-- STATIC METHODS -->
<!-- DONT CREATE OBJECTS -->
<?php
class class111{
    static public $num = 10;
}
echo class111 :: $num;
?>

<!-- NAMESPACE -->
<!-- FILE1 -->
<?php
namespace file1{
    function hello(){
        echo "hello";
    }
}
?>
<!-- FILE2 -->
<?php
namespace file2{
    function hello(){
        echo "hello";
    }
}
// MAIN FILE
include('file1.php')
include('file2.php')
file1\hello();    //CALLING FIRST FILE FUNCTION
?>






