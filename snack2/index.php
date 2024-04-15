<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
<form action="" method="GET">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="mail">Mail:</label>
        <input type="text" id="mail" name="mail"><br><br>
        
        <label for="age">Age:</label>
        <input type="text" id="age" name="age"><br><br>
        
        <button type="submit">Send</button>
    </form>

<?php 

if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
}

?>
</body>
</html>