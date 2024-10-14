<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $capitals=array("Nairobi","kisumu","meru","nakuru","eldoret");
    array_pop($capitals);
    array_push($capitals,"Embu");
   

    foreach($capitals as $capital){
        echo $capital . "<br>";
    }
    //foraech function is used to loop between arrays
    //arrays are variables that store several values at once 

    //associative arrays 
    //shift function removes the firt element in an array
 

    $cars=array("subaru"=>"forestar","nissan"=>"juke","Mercedes"=>"c200","prado"=>"v8");
    array_pop($cars);
    $cars["prado"]="crusa";


    foreach($cars as $key => $value){
        echo "{$key} = {$value}"  ."<br>";
    }
 
    //For loop
    $count=null;
    for($i=1; $i <=6;$i++){
     echo $i ."<br>";
    }
    
    ?>
</body>
</html>
