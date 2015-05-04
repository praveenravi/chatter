<?php

if(isset($_POST['passwrod_submit'])) {
    

   // echo $_POST['your_password'];
    if($_POST['your_password'] == "rani123") {
       // echo "here";
        header("Location: http://chatter.praveenravi.com/chat.php");
        die();
    } else {
        echo "Try again";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Chumma :)</title>
</head>
<body>

<form action="#" method="post">
    <input type="password" name="your_password" placeholder="Enter password">
    <input name="passwrod_submit" type="submit" value="Submit">
</form>



</body>
</html>