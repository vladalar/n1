<!DOCTYPE html>
<html>
<head>
    <h1>NOTES</h1>
</head>
<body align="center">
<p><h3>Online Notepad</h3></p>

<?php
$path = "saved";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='$path/$file'>$i . $file</a><br><br>";
        $i++;

    }
}
closedir($dh);
?>


<button class="button"><a href="editor.html">Add a new note</a></button>
<button class="button"><a href="loadNote.php?x=add">Edit a note</a></button>
<button class="button"><a href="viewNote.php">View a note</a></button>



</body>
</html>

