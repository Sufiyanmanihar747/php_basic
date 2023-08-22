<?php 
    // DATE 
    echo "hello"; 
    echo "<br>"; 
    echo date("y/m/d");
    echo "<br>";
    echo date("y.m.d");
    echo "<br>";
    echo date("y-m-d");
    echo "<br>";

    //TIME
    date_default_timezone_set("Asia/Kolkata");
    echo date("h:i:sa");
    echo "<br>";

    //SET DEFAULT TIME
    $d =mktime(11,14,54,8,12,2022); 
    echo date("Y-m-d h:i:sa",$d);
    echo "<br>";

   $dnt = strtotime("10:30pm April 12 2022");
   echo date("Y-m-d h:i:sa",$dnt);
   echo "<br>";
   $dnt = strtotime("tomorrow");
   echo date("Y-m-d h:i:sa",$dnt) . "<br>";
   $dnt = strtotime("next saturday");
   echo date("Y-m-d h:i:sa",$dnt). "<br>";
   $dnt = strtotime("+3 Months");
   echo date("Y-m-d h:i:sa",$dnt). "<br>";
?>

<!-- INCLUDED FILE FOOTER.PHP -->
   <!-- <?php include 'index.php'; ?>  -->

   <!-- READ FILES -->
   <!-- echo readfile("filename.ext"); -->

   <!-- OPEN FILE -->
   <!-- fopen("filename.exe","r") or die("Unable to open file "); -->

   <!-- READ FILE -->
   <!-- fread(variablename , filesize (filename.exe)); VARIABLE IS USED TO CALL -->

   <!-- FORMAT TO FETCH -->
   <!-- $myfile = fopen("filename.exe","r");
    SOME CODE....
    fclose($myfile); -->

    <!-- READ SINGLE LINE -->
    <!-- echo fgets($myfile); -->

    <!-- END OF FILE -->
    <!-- while(!feof($myfile)){
        echo fgets($myfile);
    }
    fclose($myfile); -->

    <!-- fgetc(filename);   READ ONLY SINGLE CHARACTER -->


    <!-- WRITE AND REPLACE IN A FILE -->
    <!-- <?php
         $myfile = fopen("index.php","w"); 
            $text = "john Doe\n";
            fwrite($myfile,$text);
        fclose($myfile);
    ?> -->

    <!-- ADDING IN A FILE -->
    <!-- <?php
         $myfile = fopen("index.php","a"); 
            $text = "john Doe\n";
            fwrite($myfile,$text);
        fclose($myfile);
    ?> -->

    <!-- FILE UPLOAD IN PHP -->
        <!-- METHOD MUST BE POST
        enctype = "multipart/form-data" -->

    <!-- CHECK IF FILE IS ALREADY EXIST -->
    <!-- file_exists($targetfile) -->

<!-- COOKIE IN PHP -->
    <!-- setcookie(name, value, expire, path, domain, secure, httponly); -->

    <!-- CREATE COOKIE/RETRIEVE COOKIE -->
        <!-- OUTER HTML TAG -->
            <?php 
                $cookie_name = "user";
                $cookie_value = "john doe";
                setcookie($cookie_name ,$cookie_value ,time() + (86400 * 30) ,"/");  // 86400 = 1 day
            ?>
        <!-- INSIDE HTML TAG -->
            if(!isset($_COOKIE[$cookie_name])){
                echo $cookie_name;
                echo $_COOKIE[$cookie_name];
            }
    
    <!-- DELETE COOKIE -->
    setcookie("user", "" ,time()-3600);



<!-- SESSION -->
    <?php
        <!-- START SESSION -->
        session_start();
    ?>

    <!-- INSIDE HTML -->
        <?php
            <!-- SET SESSION -->
            $_SESSION["favcolor"] = "green"
        ?>

    <!-- DESTROY SESSION  -->
        <?php
            //remove all session variable
            session_unset();
            //destroy the session
            session_destroy()
        ?>
    
<!-- DIFFERENCE BTW SESSION AND COOKIE -->
    session store data in server side 
    cookie store data in client side (in browser)

<!-- CACHE IN PHP -->
    ob_start()                     // TO START BUFFERING
    $output = ob_get_contents()   //get the content of output BUFFERING
    ob_end_clean()                //END THE OUTPUT BUFFER AND  DISCARD THE CONTENT 
    apc_store('cache_key' , $value , 3600)  //STORE THE VALUE IN CATCH FOR 1 HOUR       
    apc_fetch('cache_key')        //FETCH VALUE 
    memcache_set()               
    xcache_set()                 

<!-- CONNECTION WITH MYSQLI -->
    $conn = mysqli_connect($servername , $username , $password)

<!-- CHECK CONNECTION  -->
    if(!$conn){
        die("Connection failed" . mysqli_connect_error())
    }
    echo "Connection succesfuly"

<!-- CLOSE CONNECTION -->
    $conn -> close()
    mysqli_close($conn)

<!-- CREATE DATABASE -->
    $sql = "CREATE DATABASE myDB"

<!-- CALL BACK FUNCTION -->
    function my_callback($item){
        return strlen($item);
    }
    $string = ["apple" , "orange" ];
        $length = array_map(my_callback ,$string)
    print_r($length)        //LENGTH WILL RETURN ARRAY OF LENGTH OF EACH ELEMENT IN ARRAY

<!-- EXCEPTION IN PHP -->
    <?php
    if($divisor == 0){
        throw new Exception("Divisor is zero")
    }
    try {
        echo divide(5 , 0)
    } catch(Exception $e){

        echo "unable to divide"
    } finally{
        echo "process completed"
    }
    ?>

