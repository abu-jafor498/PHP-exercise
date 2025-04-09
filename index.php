<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>PHP Working </title>

       <!-- links -->
       <link rel = "stylesheet" href = "css/bootstrap.css">
       <link rel = "stylesheet" href = "css/media.css">
</head>
<body>

      <div class="container">
              <h1>PHP Examples</h1>

              <?php
              // example 1
              echo "<h2>hello world</h2>";

              echo "<h3>"."Welcome to Bangladesh 2.0"."</h3>";
              echo "This"." ". "is"." ". "a"." ". "beautiful"." "."country.<br>";

               // example 2
               $name = "Afganisthan <br>";
               echo $name;

               // example 3
               $a = "20";
               $b = "10";
               $c  = $a + $b;
               $d  = $a * $b;
               $e  = $a / $b;
               $f  = $a - $b;
               echo  "addition of 20 and 10 = $c <br>";
               echo  "intersection of 20 and 10 = $d <br>";
               echo  "divitation of 20 and 10 = $e <br>";
               echo  "separetion of 20 and 10 = $f <br>";

              // example 4
              $a = "His name is Jafor.";
              var_dump ($a);
              echo("<br>");

                // example 5
                $number = "100.10";
                var_dump ($number);
                echo("<br>");

               // example 7
               $num = 100;
               var_dump ($num);
               echo("<br>");

                // example 8
                $x = true;
                var_dump ($x);
                echo("<br>");

                // example 9
                $x = "false";
                var_dump ($x);
                echo("<br>");

                // example 10
                $y = 100.01010;
                var_dump ($y);
                echo("<br>");

                // example 11
                if(5 > 4)
                     echo "Have a nice day";
                     echo("<br>");

              // example 12
              $num = 10;
              if ( $num > 9){
                     echo "you are teenager";
                     echo("<br>");
              } 

              // example 13
              if(50 == 100){
                     echo "its equal";
              } else { 
                     echo "its not equal";      
              } 
              echo("<br>");

              // example 14
              $time = date("H");
              if ($time < "5"){
                     echo "good morning";
              } elseif( $time < 20){
                     echo "have a good day";
              } else{
                     echo "have a good night";
              }
              echo("<br>");

               // example 15
               $nm = 50;
               if ( $nm < 51 ) $nx = "hello";
               echo $nx
               
             
              ?>
              <?php 
                // example 16
                echo("<br>");
                 $favcolor = "green";

                 switch ( $favcolor ) {
                        case "red";
                              echo "Your favorite color is red";
                              break;
                        case "blue";
                              echo "Your favorite color is blue";
                              break;
                        case "green";
                              echo "Your favorite color is green";
                              break;
                       default:
                              echo "Your favourite is neither red, blue nor green!";
                       }
                       echo("<br>");
                // example 17
                $a = 15;

                     if ($a > 10) {
                     echo "Above 10";
                     if ($a > 20) {
                     echo " and also above 20";
                     } else {
                     echo " but not above 20";
                     }
                     }
                     
              
              // example 18
              echo("<br>");
              $date = 0;

              switch ( $date ) {
                     case 1;
                            echo "Today is Saturday";
                            break;
                     case 0 ;
                            echo "Today is Friday";
                            break;
                     default:
                     echo "This are Working day";
              }

               // example 19
               echo("<br>");
               $d = 6;

               switch ( $d) {
                     case 1;
                     case 2;
                     case 3;
                     case 4;
                     case 5; 
                            echo "This weekend is too long";
                            break;
                     case 6 ;
                            echo "Weekends is the best";
                            break;
                     default:
                            echo "Something is wrong";
               }

               // example 20
               echo("<br>");

               $x = 1;
               while ( $x < 3 ) {
                     echo $x;
                     $x++;
               }
              
               // example 21
               echo("<br>");

               $y = 2;
               while ( $y < 5) {
                     if ( $y == 3 ) break;
                     echo $y;
                     $y++;
               }

               // example 22
               echo("<br>");
               $j = 0;
               while ( $j < 9 ){
                     $j++;
                     if ( $j ==3) continue;
                     echo $j;
               }
           
              
               // example 23
               echo("<br>");
               
               $h =  0;
               while ( $h < 8 ):
                      echo $h;
                      $h++;
               endwhile;

                // example 24
                echo("<br>");
                 $k = 0;
                 while ( $k < 100) {
                     $k+=10;
                     echo $k ;
                 }

              
                // example 25
                echo("<br>");
                $l = 1;
                do {
                     echo $l;
                     $l++;
                } while ( $l < 10);

                 // example 26
             
               
                 for ($x = 0; $x <= 10; $x++) {
                     echo "The number is: $x <br>";
                }

                // example 27
                $i = 1;

                     do {
                     echo $i;
                     $i++;
                     } while ($i < 6);

               // example 28
               for ( $y = 0; $y <= 10; $y++){
                     if ( $y == 3  ) break;
                     echo "The Number is: $y <br>";
               }

               // example 29

               $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

               foreach ($members as $x => $y) {
                 echo "$x : $y <br>";
               }

               // example 30
               $mujahid = array( "Khalid"=>"40", "Omar"=>"50", "Ali"=>"100");
               
               foreach ( $mujahid as $b => $v) {
                     echo "$b : $y  <br>";
               }
              ?>

              <?php 
             
              ?>
             
      </div>

       <script src = "js/bootstrap.bundle.min.js"></script>
       <script src = "js/script.js"></script>
</body>
</html>