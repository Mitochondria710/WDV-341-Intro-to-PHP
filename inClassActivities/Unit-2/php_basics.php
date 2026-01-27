<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Q: What does PHP stand for?</p>
        <p>PHP HyperText Preprocessor</p>
    
    Task 1: Use both echo and print to output data
    <p>
        <?php
        echo "A PHP file must end with .php";
        print "A PHP file must end with .php";
    ?>
    </p>
    <p>
    Q: Where can we place PHP tags on a webpage?
</p>
<p>A: Anywhere in the script.</p>
    <p>This is plain HTML on the same page!</p>
    
    <p>Task 2: Set and use variables for output</p>
    <?php
        // Variables start with $
        $my_school = "DMACC";
        $my_degree = "Web Development";
        echo "My school is $my_school and my degree is $my_degree.";
    ?>
    
    <p>Q: What is a constant variable?</p>
    
    <p>Example:</p>
    <?php
      define("HELLO_WORLD", "Hello World!");
      echo "<p>" . HELLO_WORLD . "</p>";

      echo <<<DESCRIPTION
      Some Text
      <p>A paragraph!</p>
        Whatever you want!
      DESCRIPTION;
    ?>
    
    <p>Task 3: Demonstrate concatenation, combined and increments operators</p>
    <?php
        // Concatenation operator: .
        $my_details = "<p>My school is " . $my_school . " and my degree is " . $my_degree . ".</p>";
        // Combined operator +=
        $number1 = 1;
        $number1 += 4;
        echo "<p>$number1</p>";
        // Increment operator ++
        $number2 = 5;
        $number2++;
        echo "<p>$number2</p>";
    ?>
    
    <p>Task 4: Integrate PHP + HTML</p>
    <?php
        $title = "Welcome to PHP!";
        $description = "PHP can generate dynamic HTML content.";
    ?>
    
    
    <p>Q: Which languages can PHP output?</p>
    <p>A: HTML, JavaScript, CSS. </p>
    <p>Q: What happens to HTML inside a PHP page?</p>
    <p>A: it gets mixed in with the output from PHP and is sent to the browser.</p>
    <p>Q: What triggers PHP to run on the server?</p>
    <p>A: A file with the .php extension.</p>

    <!-- Challenge Task!!! -->
    Step 5 — Challenge Task
    
    Create a Personal Profile page using PHP:
    
    Requirements:
    
    Note: This should contain all the HTML code for a proper webpage.
    
    1. Create three variables: $name, $hobby, $favoriteColor
    
    2. Create a constant for your school name.
    
    3. Use echo or print to display:
       "Hi, my name is [name], I like [hobby], and my favorite color is [color]. I study at [school]."
    
    4. Use concatenation at least once.
    
    5. Use an increment operator to simulate adding 1 year to your age.
    
</body>
</html>