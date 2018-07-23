<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>


<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Title: <input type="text" name="title">
    <span class="error">* <?php echo $titleErr;?></span>
    <br><br>
    Text: <textarea name="text" rows="15" cols="25"><?php echo $text;?></textarea>
    <br><br>
    <button class="button" onclick="alert('Your note has been saved')"><a href = "write .php?x=add">Save</button>

</form>
<br>
<br>

<?php
$nameErr = $titleErr = "";
$name = $title = $text = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    }
    else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["title"])) {
        $emailErr = "Title is required";
    }
    else {
        $title = test_input($_POST["title"]);
    }

}
if (empty($_POST["text"])) {
    $text = "";
} else {
    $text = test_input($_POST["text"]);
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
?>

</body>
</html>