<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    $my_courses = ["Advanced JavaScript", "Intro PHP"];
    echo 
    "<script>\n";
    for($i = 0; $i < count($my_courses); $i++) {
        echo "alert('" . $my_courses[$i] . "');\n";
    }
    echo "</script>"
    ?>
</head>
<body>
    <?php echo "Hello World!"; ?>
</body>
</html>