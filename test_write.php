<?php
$folder = "uploads/";

if (!is_dir($folder)) {
    if (mkdir($folder, 0755, true)) {
        echo "Folder created successfully!";
    } else {
        echo "Folder creation failed! PHP cannot write here.";
    }
} else {
    echo "Folder already exists.";
}

$fileTest = $folder . "test.txt";
if (file_put_contents($fileTest, "test") !== false) {
    echo "<br>File created successfully!";
    unlink($fileTest); // delete test file
} else {
    echo "<br>PHP cannot write files in this folder.";
}
?>