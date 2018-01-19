<?php
session_start();
require_once 'inc.php';
$username = (isset($_POST['username'])) ? trim($_POST['username']) : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$redirect = (isset($_SESSION['redirect'])) ? $_SESSION['redirect'] : 'main.php';

if(isset($_POST['submit'])){
    //没有会话信息
    if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 1){
        if(isUser($_POST['username'], $_POST['password'])){
            $_SESSION['username'] = $username;
            $_SESSION['logged'] = 1;
            header('refresh:5;url='.$redirect);
            echo '<p>you will be redirected to your original page request.</p>';
            echo <<<ENDHTML
<p>if your browser doesnt redirect you properly automatically,
<a href=$redirect>click here</a>
</p>
ENDHTML;

            if(!isset($_COOKIE['username'])){
                $expire = time() + 60*60*24*30;
                setcookie('username',$username,$expire);
                echo 'cookies set';
            }
        }else{
            echo <<<ENDHTML
<p><strong>you have supplied an invalid username and/or password
!</strong>please <a href='register.php'>click here to register</a>
if you have not done so already.</p>
ENDHTML;
            $username = '';
            $password = '';
        } 
    }
}
?>


<html>
<body>
<form action="login.php" method="post">
username:<input type="text" name="username" value="
<?php 
if($username == ''){
    if(isset($_COOKIE['username'])){
        $username = $_COOKIE['username'];
    }
}
echo $username;
?>
"/></br>
password:<input type="password" name="password" value="<?php echo $password;?>"/></br>
<input type="hidden" name="redirect" value="<?php echo $redirect;?>"/></br>
<input type="submit" name="submit" value="Login"/></br>
</form>
</body>
</html>