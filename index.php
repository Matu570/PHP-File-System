<?php
// To open a file we must use the function fopen("file to open", "action"). The actions can be "r" to read, "x" to execute,  "w" to write, and "a+" to read and write.
$openFile = fopen("text.txt", "a+");

// Read file:
while (!feof($openFile)) {
    $contain = fgets($openFile);
    echo $contain."<br>";
};

// Write file:
fwrite($openFile, "<br>I am a text introduced from PHP");

//Close File
fclose($openFile);

// Copy file
// copy("text.txt", "copied-file.txt") or die("error to copy");

// Rename file:
// rename("copied-file.txt", "last-text-file.txt");

// Delete file:
// unlink("last-text-file.txt");

// Check if a file exist or not exist
if(file_exists("text.txt")){
    echo "<h2>The file exist</h2>";
} else {
    echo "<h2>The file dont exist</h2>";
};

// Create or delete folders or directorys
// Using mkdir() i can create a folder and indicate the permissions.
if(!is_dir('created_dir')){
    mkdir("created_dir", 0777) or die('Cant create the directory');
} else{
    echo "The directory already exists";
};

// Delete directorys:
rmdir('created_dir');

// Show multiple files
echo "<hr><h3>Contain of the directory</h3>";
if($management=opendir('./created-dir-manual')){
    while(false!==($openFile=readdir($management))){
        if($openFile!='.'&&$openFile!='..'){
            echo $openFile."<br>";
        };
    };
}

