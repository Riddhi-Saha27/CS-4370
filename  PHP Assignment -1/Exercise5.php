<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove All Occurrences</title>
</head>
<body>
    <?php
    function remove_all($str, $charToRemove) {
        $result = "";  // Empty string to store the result

        // Loop through each character in the string
        for ($i = 0; $i < strlen($str); $i++) {
            // If the character is not the one to remove, add it to the result
            if ($str[$i] != $charToRemove) {
                $result .= $str[$i];  // Concatenate the character to the result
            }
        }

        // Return the modified string
        return $result;
    }

    // Test example
    $phrase = "Summer is here!";
    $charToRemove = 'e';

    // Print the original phrase
    echo "Original Phrase: " . $phrase . "<br>";

    // Call the remove_all function and store the result
    $modifiedPhrase = remove_all($phrase, $charToRemove);

    // Print the modified phrase
    echo "Modified Phrase: " . $modifiedPhrase;
    ?>
</body>
</html>
