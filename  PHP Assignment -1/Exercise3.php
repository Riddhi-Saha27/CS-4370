<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Count</title>
</head>
<body>
    <?php
    function word_count($str) {
        $length = strlen($str); // Get the length of the string
        $count = 0; // Initialize word count
        $inWord = false; // Variable to track if we're inside a word

        for ($i = 0; $i < $length; $i++) {
            if ($str[$i] != ' ') { // If the character is not a space
                if (!$inWord) {
                    // We've found the start of a word
                    $count++;
                    $inWord = true; // Mark that we're inside a word
                }
            } else {
                // If the character is a space, we're no longer in a word
                $inWord = false;
            }
        }

        return $count;
    }

    // Example phrase to test the function
    $phrase = "hello, how are you?";

    // Call the function and store the word count
    $wordCount = word_count($phrase);

    // Output the phrase and the word count
    echo "<p>Phrase: '$phrase'</p>";
    echo "<p>Word count: $wordCount</p>";
    ?>
</body>
</html>
