<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Count</title>
</head>
<body>
    <?php
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

    // Example string
    $phrase = "Hello, hello! How are you? I am fine, how are you?";

    // Call the function to count words and store the result
    $wordCountResult = countWords($phrase);

    // Use print_r to display the associative array on the webpage
    echo "<pre>";
    print_r($wordCountResult);
    echo "</pre>";
    ?>
</body>
</html>
