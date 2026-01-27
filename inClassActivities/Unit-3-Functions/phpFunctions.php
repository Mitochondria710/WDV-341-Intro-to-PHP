<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $GLOBALS["myVariable"] = "My Variable Value.";
    function myFunction() {
        echo $GLOBALS["myVariable"];
    }
    myFunction();
    echo "<br>";
    $myVariable2 = "My second global variable.";
    function myFunction2() {
        global $myVariable2;
        echo $myVariable2;
    }
    myFunction2();
    ?>
</body>
</html>