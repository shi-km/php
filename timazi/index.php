<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
      <input type="radio" name="credit_card" value="visa">
      visa<br>
      <input type="radio" name="credit_card" value="Mastercard">
      Mastercard<br>
      <input type="radio" name="credit_card" value="American Express">
      American Express<br>
      <input type="submit" name="confirm" value="confirm"><br>
    </form>
    <?php

$credit_card=null;
      if(isset($_POST["confirm"])){
        $credit_card = $_POST["credit_card"];
      }
      switch($credit_card){
        case "visa";
        echo "you have selected visa";
        break;
        case "Mastercard";
        echo "you have selected Mastercard";
        break;
        case "American Express";
        echo "you have selected American Express";
        break;
        default: echo "you have not made a selection";
      }

    //   if(isset($_POST["login"])){
    //      $username= $_POST["username"];
    //      $password=$_POST["password"];

    //      if(empty($username)){
    //         echo "Please Enter  username";
    //      }

    //      elseif(empty($password)) {
    //      echo "please enter password .<br>";
          
    //      }

    //      else{
    //         echo "welcome {$username} Your log in info is . <br>";
    //      }
    //   }
    //   foreach($_POST as $key => $value){
    //     echo "{$key} = {$value}. <br>";
    //   }

    // $capitals=array("Nairobi","kisumu","meru","nakuru","eldoret");
    // array_pop($capitals);
    // array_push($capitals,"Embu");
   

    // foreach($capitals as $capital){
    //     echo $capital . "<br>";
    // }
    //foraech function is used to loop between arrays
    //arrays are variables that store several values at once 

    //associative arrays 
    //shift function removes the firt element in an array
 

    // $cars=array("subaru"=>"forestar","nissan"=>"juke","Mercedes"=>"c200","prado"=>"v8");
    // array_pop($cars);
    // $cars["prado"]="crusa";              


    // foreach($cars as $key => $value){
    //     echo "{$key} = {$value}"  ."<br>";
    // }
 
    //For loop
    //for loop has three contions 

    // $count=$_POST["counter"];
    // for($i=1; $i <=$count;$i++){
    //  echo $i ."<br>";
    // }

    //two important php functions 
    //isset() and empty()
    // isset function returns true if a variable is declared and not null.

    // $var=30;

    // if(isset($var)){
    //     echo "This is a set";
    // }
    // else{
    //     echo "This is not a set";
    // }
    

    ?>
</body>
</html>
