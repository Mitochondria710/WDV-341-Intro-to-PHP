<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Demo</title>
    <style>
        .hp-field-wrapper {
            display: none;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_GET["message"])){
            echo "<p>" . $_GET["message"] . "</p>";
        }
    ?>
    <form action="formProcessor.php" method="post">
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
            <input type="checkbox" name="classes[]" id="adv_js" value="advanced_js">

            <label for="intro_php">Intro PHP</label>
            <input type="checkbox" name="classes[]" id="intro_php" value="intro_php">
        </p>
        <div class="hp-field-wrapper"> 
            <input type="hidden" id="honeypot" name="honeypot"> 
        </div>
        <p>
            <button type="submit" name="submit">Save</button>
        </p>
        <!--<input type="submit" value="Save"> this works but is not as good due to lack of customization options-->
    </form>
</body>
</html>