<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_FILES['userFile']['name'];

        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        //validate file
        $extension = pathinfo($name, PATHINFO_EXTENSION);
        echo $extension;
        //process file
        $tmp_name = $_FILES['userFile']['tmp_name'];
        move_uploaded_file($tmp_name, "./uploads/$name");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Demo</title>
</head>
<body>
    <form action="fileUploadDemo.php" method="post" enctype="multipart/form-data">
        <label for="fileUpload">Choose a file:</label>
        <input id="fileUpload" type="file" name="userFile" accept="image/*"><br>
        <p><button type="submit">Upload My File</button></p>
    </form>
    <?php
    if(!empty($name)){
    ?>
    <img src="<?php echo "./uploads/$name"; ?>" alt="">
    <?php
        }
    ?>
</body>
</html>