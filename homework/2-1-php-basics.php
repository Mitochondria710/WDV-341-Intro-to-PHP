<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $yourName = "Jacob";
    
    echo "<h1>2-1 PHP Basics</h1>";
    ?>
    
    <h2>
        <?php echo $yourName; ?>
    </h2>
    <?php
    $number1 = 1;
    $number2 = 7;
    echo $number1 + $number2;
    echo "<br>";
    $languagesArray = ["PHP", "HTML", "JavaScript"];
    for($i = 0; $i <= 2; $i++) {
        echo $languagesArray[$i], " ", "<br>";
    }
    ?>


</body>
</html>