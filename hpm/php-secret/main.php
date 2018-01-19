<?php
require_once 'inc.php';
require_once 'auth.inc.php';
?>

<html>
<body>
<h1>welcome to the home page</h1>
<?php 
if(isset($_SESSION['logged']) && $_SESSION['logged'] == 1){
    echo <<<ENDHTML
<p>thanks for logging into our system,
<b>$_SESSION[username]</b>
</p>
<p>
you may now <a href="user_personal.php">click here</a> to go
to your personal information area and update or remove your in
formation.
</p>
ENDHTML;

//     if($_SESSION['admin_level'] > 0){
//         echo "<p><a href='admin_area.php'>click here</a>to
//         access your administrator tools</p>";
//     }
}else{
    echo "<p>you are not logged into our system</p>";
    echo "<a href='login.php'>click here</a> to log in!";;
    echo "<a href='register.php'>click here</a> to register!";
}
?>
</body>
</html>