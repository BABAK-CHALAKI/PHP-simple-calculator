<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="green">
    <title>php calculator</title>
   
</head>
<body>
    <p>
    <?php $number1 = rand(1,200);   
          $number2 = rand(1,200);
          $arrays = array("+","-","*","/");
          $result = 0;
          $lineset = rand(0,3);
          if($arrays[$lineset] == "+")
          $result = $number1 + $number2;
            else if($arrays[$lineset] == "-")
            $result = $number1 - $number2;
            else if($arrays[$lineset] == "*")
            $result = $number1 * $number2;
            else if($arrays[$lineset] == "/")
            $result = $number1 / $number2;
          ?>


            <?php  print( '<p style="margin-inline:48PX;">' . $number1 . " " . $arrays[$lineset] . " " . $number2 . " = " . $result . "</p>"); ?>
        
        
    </p>
</body>
</html>
