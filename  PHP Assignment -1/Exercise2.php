<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
</head>
<body>
    <pre>
    <?php
    function triangle($size) {
        for ($i = 0; $i <= $size; $i++) {
            // Print spaces for right alignment
            $result = str_repeat("*", $i);

            echo $result . "\n";
        }
    }

    // Call the function to print the triangle
    triangle(5);  // You can change the number to test with different sizes
    ?>
    </pre>
</body>
</html>
