<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function Results</title>
</head>
<body>
    <?php
    // Function to say hello world
    function hello_world() {
        return "Hello world!";
    }

    // Function to create a right-aligned triangle
    function triangle($size) {
        $result = "";
        for ($i = 1; $i <= $size; $i++) {
            $result .= str_repeat("*", $i) . "<br/>";
        }
        return $result;
    }

    // Function to count words in a string
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

    // Function to remove all occurrences of a character
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

    // Function to count word occurrences
    function countWords($str) {
        // Convert the string to lowercase to ignore case sensitivity
        $str = strtolower($str);
        
        // Use preg_replace to remove non-letter characters and replace them with spaces
        $str = preg_replace("/[^a-z\s]/", "", $str);
        
        // Split the string into words using spaces
        $words = explode(" ", $str);
        
        // Initialize an empty associative array to store word counts
        $wordCount = array();
        
        // Loop through each word
        foreach ($words as $word) {
            if (!empty($word)) {
                // If the word already exists in the array, increment its count
                if (array_key_exists($word, $wordCount)) {
                    $wordCount[$word]++;
                } else {
                    // If the word does not exist in the array, set its count to 1
                    $wordCount[$word] = 1;
                }
            }
        }

        // Return the associative array of word counts
        return $wordCount;
    }

    // Test examples
    echo "<h1>Results</h1>";

    // Hello World
    echo "<h2>Hello World</h2>";
    echo "<p>" . hello_world() . "</p>";

    // Triangle of size 5
    echo "<h2>Triangle of Size 5</h2>";
    echo "<pre>" . triangle(5) . "</pre>";

    // Word Count
    $phraseForCount = "hello, how are you?";
    echo "<h2>Word Count</h2>";
    $wordCount = word_count($phraseForCount);
    echo "<p>Phrase: '$phraseForCount'</p>";
    echo "<p>Word count: $wordCount</p>";

    // Remove All Occurrences
    $phrase = "Summer is here!";
    $charToRemove = 'e';

    // Print the original phrase
    echo "<h2>Remove All Occurrences</h2>";
    echo "Original Phrase: " . $phrase . "<br>";

    // Call the remove_all function and store the result
    $modifiedPhrase = remove_all($phrase, $charToRemove);

    // Print the modified phrase
    echo "Modified Phrase: " . $modifiedPhrase;

    // Count Words
    echo "<h2>Count Words</h2>";
    $phraseToCount = "Hello, hello! How are you? I am fine, how are you?";
    $wordCountResult = countWords($phraseToCount);
    echo "<pre>";
    print_r($wordCountResult);
    echo "</pre>";
    ?>
</body>
</html>
