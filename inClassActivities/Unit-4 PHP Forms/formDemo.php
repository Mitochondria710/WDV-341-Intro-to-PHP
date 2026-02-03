<?php
//$last_name = $_POST["first_name"];
//$first_name = $_POST["last_name"];
echo $_POST["class"] [0];
echo $_POST["class"] [1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Demo</title>
</head>
<body>
    <form action="formDemo.php" method="post">
        <p>
            <label for="name">Name</label>
            <input type="text" name="first_name">
        </p>
        <p>
            <div>Degree</div>
            <label for="web_dev">Web Development</label>
            <input type="radio" name="degree" id="web_dev" value="web development">

            <label for="web_design">Web Design</label>
            <input type="radio" name="degree" id="web_design" value="web design">
        </p>
        <p>
            <div>Classes</div>
            <label for="adv_js">Advanced JavaScript</label>
            <input type="checkbox" name="class[]" id="adv_js" value="advanced_js">

            <label for="intro_php">Intro PHP</label>
            <input type="checkbox" name="class[]" id="intro_php" value="intro_php">
        </p>
        <p>
            <button type="submit">Save</button>
        </p>
        <!--<input type="submit" value="Save"> this works but is not as good due to lack of customization options-->
    </form>
</body>
</html>