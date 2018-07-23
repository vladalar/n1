<!DOCTYPE html>
<html>
<body>

<form id='Editor' action='write.php' method='post' accept-charset='UTF-8'>
    <h1>Text Editor</h1>
    <br>
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <div>

        <p><label for='textfield'>TITLE:</label></p>
        <input type='text' name='title' id='title' maxlength="15" required>
        <br>

        <p><label for='textfield'>TEXT FIELD:</label></p>
        <textarea rows="4" cols="50" type='text' name='textfield' id='textfield' maxlength="100" required></textarea>
        <br>
        <input type="submit">
    </div>
</form>

</body>
</html>

