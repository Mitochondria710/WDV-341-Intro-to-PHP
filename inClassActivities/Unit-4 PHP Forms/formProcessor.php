<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
</head>
<body>
    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST["first_name"])) {
            header("Location: formDemo.php?message=First Name is required");
        }
        if(!empty($_POST['honeypot'])){
            //bot detected because honeypot field is filled
            header("Location: formDemo.html");
        } else {
            $first_name = $_POST["first_name"];
            $classes = $_POST["classes"];
    ?>
        <p>The form was submitted:<p>
            <ul>
                <li>First Name: <?php echo $first_name ?></li>
                <li> Classes: 
                    <?php
                        echo implode(", ", $classes);
                    ?>
                </li>
            </ul>
    <?php
        }
        } else {
            header("Location: formDemo.html");
        }
    ?>
</body>
</html>