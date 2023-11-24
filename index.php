<?php
// Path to the folder containing the templates
$folderPath = 'templates/';

// Read the files from the folder
$files = scandir($folderPath);

// Filter out '.' and '..' from the file list
$files = array_diff($files, array('.', '..'));

// Check if there are any files in the folder
if (count($files) == 0) {
    echo "No files found in the folder.";
    exit;
}

// Select a random file
$randomFile = $files[array_rand($files)];

// Get the content of the file
$fileContent = file_get_contents($folderPath . $randomFile);

$fileContent = str_replace('{TITLE}', 'judul ni ya', $fileContent);


// Display the content of the file
// echo $fileContent;
?>


<button onclick="displayRandomText()">Click me</button>

<script>
    function displayRandomText() {
        var randomTexts = ["Hello", "World", "Lorem", "Ipsum", "Dolor"];
        var randomIndex = Math.floor(Math.random() * randomTexts.length);
        alert(randomTexts[randomIndex]);
    }
</script>



