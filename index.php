<html lang="en">
<head>

    <title>php practice</title>
</head>
<body>
    
    <div class="container">
        <p>Hello PHP</p>
    </div>

    <?php
        echo "Hello world";
        echo "<br>";
        $variable =56;
        echo $variable;
        echo "<br>";
        $variables =56;
        echo $variables;
        echo "<br>";

        // OPERATORS IN PHP
        // Assignment operator
        $variable =56;
        $variables =56;
        echo "<br>";
        echo "Addition:",$variable + $variables;
        echo "<br>";
        echo "Substraction:",$variable - $variables;
        echo "<br>";
        echo "Multiplication:",$variable * $variables;
        echo "<br>";
        echo "Division:".$variable / $variables;
        echo "<br>";
        // Comparison operator
        // increment operator
        // logical operator

    // DATA TYPES IN PHP
        // Sting
        // Integer
        // Float
        // Boolean
        // Array
        // Object

        $var="this is string";
        echo var_dump($var);
        echo "<br>";
        $num=65;
        echo var_dump($num);
        echo "<br>";

        $age =55;
        if ($age>18) {
            echo "You can vote ".$age."age";
            echo "<br>";
        }
        else {
            echo "You cannot vote";
        }
        
        // DIFFERENCE BTW PRINT AND ECHO
        echo $age." ".$num;
        echo "<br>";
        print $age." ".$num;
        // DOT . --> IS STRING CATINATION OPERATOR

        $a=0;
        while ($a <= 10) {
            echo "<br> The value of list: ";
            echo $a;
            $a++;
        }
        echo "<br>";

        $language = array("python","c++", "php","nodejs");
        echo "Length of array: ".count($language);
        echo "<br>";
        $a=0;
        while ($a < count($language)) {
            echo "language is: ";
            echo $language[$a];
            echo "<br>";
            $a++;
        }

        // FOR EACH
        foreach ($language as $value) {
            echo "<br>The value from foreach loop is ";
            echo $value;
        }
        echo "<br>";

        // FUNCTIONS IN PHP
        function print_number($number){
            echo "<br>Your nuber is ";
            echo $number;
        }
        print_number(3928);
        print_number(39);

        // ALL ABOUT STRING
        $str= "This is";
        $len=strlen($str);
        echo "<br>The length of string is ".$len;
        echo "<br>The number of word in string is ".str_word_count($str);
        echo "<br>The reverse string is ".strrev($str);
        echo "<br>search for is position in string is ".strpos($str,"is");

        // TYPES OF ARRAY

        // ASSOCIATIVE ARRAY
            echo "<br>";
            $arr=array("peter" =>"35","ben"=>"36");
            echo "peter is ".$arr["peter"]." years old."; 

            //ITERATING ARRAY
            foreach ($arr as $key => $value) {
                echo "<br>key=" .$key . ", value=" . $value;
            }
        // MULTIDIMENSION ARRAY
            $cars = array( 
                array("volvo",34,56), 
                array("BMW",34,56), 
                array("saad",34,56), 
                array("land",34,56), 
            );

            echo "<br>" . $cars[0][0]. ": in stock: ". $cars[0][1]. " sold: ". $cars[0][2]; 
            echo "<br>" . $cars[1][0]. ": in stock: ". $cars[1][1]. " sold: ". $cars[1][2]; 
            echo "<br>" . $cars[2][0]. ": in stock: ". $cars[2][1]. " sold: ". $cars[2][2]; 
            echo "<br>" . $cars[3][0]. ": in stock: ". $cars[3][1]. " sold: ". $cars[3][2]; 
        
        // OPERATIONS ON ARRAY
            $cars2= array("volvo","bmw","toyota");
            // sort
                sort($cars2);
            // rsort
                rsort($cars2);
            // asort
                asort($cars2); //ASSENDING ORDER ACCORDING TO VALUES
            // ksort
                ksort($cars2); //ASSENDING ORDER ACCORDING TO KEY
            // arsort
                arsort($cars2); //DECENDING ORDER ACCORDING TO VALUES
            // krsort
                krsort($cars2); //DECENDING ORDER ACCORDING TO KEY 

        // PHP CONSTANT
            define("GREETING","Welcome to world");
            echo "<br>".GREETING;

        //PHP NUMBERS
            echo "<br>";
            $x=2839;
            var_dump(is_int($x));
        
        //PHP MATH
            echo "<br>";
            echo (pi());
            echo "<br>";   
            echo(min(0,28,5,6,3));
            echo "<br>";
            echo(max(0,28,5,6,3));
            echo "<br>";
            echo(abs(-56)); //RETURN POSITIVE VALUES
            echo "<br>";
            echo (sqrt(64));
            echo "<br>";
            echo (round(0.55));
            echo "<br>";
            echo (rand(5,50)); //GENERATE RANDOM INTEGER
            echo "<br>";

        //OPERTOR IN STRING
            $txt1="hello";
            $txt2="world";
            $txt1.=$txt2;      //COMBINE THE VALUE OF TEXT2 IN TEXT1 ARRY
            echo $txt1;
            echo"<br>";
        
        //ARRAY OPERTOR
            // + ADD TWO ARRAY 
            // ==
            // ===
            // !=
            // <>
            // !==

        //CONDITIONAL ASSIGNMENT OPERATOR
            // CONDITIONS ? IF TRUE: IF FALSE
            //??  //RETURN NULL IF VALUE IS NULL ELSE RETURN FIRST VALUE

        //SWITCH CASE STATEMENT
          $favcolor="red";
            switch ($favcolor) {
                case 'red':
                    echo "your favourite color is red";
                    break;
                
                default:
                    echo "your favourite color is not red";
                    break;
            }
        echo "<br>";
        // $number=639;
        $number="639";
        var_dump(is_string($number));
        echo "<br>";
        var_dump(is_numeric($number));
        
        //ARRAY METHODS

            echo "<br>";
            $fruits = ['apple','banana'];
            
            echo count($fruits);

            array_push($fruits,'mango','orange','pineapple');
            echo "<br>";
            print_r($fruits);

            echo "<br>";
            array_pop($fruits);
            print_r($fruits);

            echo "<br>";
            $firstColor=array_shift($fruits); //REMOVE FIRST ELEMENT AND STORE
            echo $firstColor;
            print_r($fruits);

            echo "<br>";
            array_unshift($fruits,'a');             //ADD IN FIRST PLACE
            print_r($fruits);
            echo "<br>";
            // $merge = array_merge($array1,$array2);

            $portion = array_slice($fruits,1,2);
            // array_splice(arrayname,from index,no of values)
            print_r($portion);

            echo "<br>";
            array_splice($fruits,1,1,'yellow');
            // array_splice(arrayname,from index,no of values,value)
            print_r($fruits);

            echo'<br>'; 
            //WILL RETURN NUMBER WHICH IS DIVISIBLE BY 2
            // array_filter($arrayname,function($num)){
            //     return $num % 2==0;
            // }

            /* array_map(function($num){
                return $num * $num;       //RETURN THE SQUARE OF EACH ELEMENT FROM ARRAY
            },arrayname); */

           /*
            array_reduce(arrayname,function($carry,$num){
                return $carry+$num;        //REDUCE THE ARRAY INTO SINGLE VALUE
            })
            */

            // $exist = in_array(value,$arrayname);   RETURN TRUE IF PRESENT ELSE FALSE

            // array_search(value , arrayname)        RETURN KEY IF ELEMENT IS PRESENT


            //IMPORTANT METHODS
            $nums = [1,2,3];
            echo is_array($nums); echo "<br>";   //RETURN WETHER NUMS IS ARRAY OR NOT

            $sentence = 'hello, world, this, is, an, array';
            print_r(explode(',',$sentence)); echo "<br>";

            print_r(implode(",",$fruits)); echo "<br>";


            $name = "sufiyan";       //CHECK IF VARIABLE IS SET OR NULL
            echo isset($name);      //RETURN TRUE 
            $name = null;
            echo isset($name);      //RETURN FALSE

            echo "<br>";
           echo array_key_exists( 1 , $nums);  //CHECK IF KEY IS PRESENT IN ARRAY OR NOT
            echo "<br>";

           $stirng = "";
           echo empty($stringname);
           $stirng = 0;
           echo empty($stringname);
           $stirng =null;
           echo empty($stringname);

           echo "<br>";
           print_r(array_keys($fruits));

        //    array_column(arrayname , 'value');    REUTRN THE VALUE OF KEY IN MULTIDIMENSION ARRAY




    ?>
</body>
</html>