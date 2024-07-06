    <?php
    echo"1.This is Inheritance 1st prctice. <br>";
    class parents{
      public function flat(){
        echo "2BHK flat <br>";
      }
      public function car(){
        echo "Ferrari <br>";
      }
    }

    class child extends parents{
      public function bike(){
        echo "R15 V3 <br>";
      }
    }
    $child = new child();
    $child->bike();
    $child->car();
    $child->flat();


    echo "<br>";
    echo"2.This is Inheritance 2nd prctice. <br>";
    class calcutator{
      public function sum($num1, $num2){
        $x = $num1;
        $y = $num2;
        return $x+$y;
      }

      public function sub($num1, $num2){
        $x = $num1;
        $y = $num2;
        return $x-$y;
      }
    }

    class caldulator2 extends calcutator{
      public function mul($num1, $num2){
        $x = $num1;
        $y = $num2;
        return $x*$y;
      }
      public function div($num1, $num2){
        $x = $num1;
        $y = $num2;
        return $x/$y;
      }
    }

    $calculator2 = new caldulator2();
    echo $calculator2->mul(10, 5).'<br>';

    echo $calculator2->sub(40,10).'<br>';


    echo "<br>";
    echo"3.This is Inheritance 3nd prctice. <br>";
    class test{

      public function __destruct(){
        echo "This is Destractor <br>";
      }

      public function __construct($number1, $number2){
        $x = 10;
        $y = 20;
        echo $number1+$number2.'<br>';
      }
      public function show(){
        echo "Hello World <br>";
      }

      public function greetings(){
        echo"Good Evening <br>";
      }
  
    }

    $object = new test(30, 50);
    $object->show();
    $object->greetings();


    ?>