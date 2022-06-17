<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICATION FORM</title>
</head>
<body>
    <p>CANDIDATE REGISTRATION FORM</p>
    <form action="index.php" method="post">
        <p>Your name: <input type="text" name="name" minlength="3" maxlength="80" placeholder="Ex.: John" pattern="[a-zA-Z\s]+$" required></p>
        <p>Your age:  <input type="number" name="age" min="1" max="130" pattern="[0-9]+$" required></p>
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>