<?php
    require("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_GET["name"];
    echo "<br>";
    echo $_GET["degree"];
    echo "<br>";
    //adding ?name=Jacob&degree=Wev Dev to the end of the url applies these variables
    if(isset($_GET["name"])){
        echo $_GET["name"];
    }
    echo "<br>";
    $assoc_array = [
        "name" => "value",
        "name2" => [
            "sub_name" => "sub_value"
        ]
    ];
    print_r($assoc_array);
    echo "<br>";
    var_dump($assoc_array);
    ?>
</body>
</html>