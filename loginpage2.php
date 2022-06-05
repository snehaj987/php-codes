<html>

<head>
    <title>form</title>
</head>
    <h1>registration</h1>
<body>
    <form action="login3.php" method="$_POST">
        <br>
        <br>
        user <input type="text" name="name">
        <br>
        <br>
        id<input type="text" name="age">
        <br>
        <br>
        <input type="password" name="value">
        
        <br>
        <br>
        <input type="submit" name="login">
    </form>
</body>
</html>


<?php
    session_start();
    $_SESSION["Login"] = "successful";
    echo "session start";
?>