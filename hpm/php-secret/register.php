<?php
require_once 'inc.php';

$hobbies_list = array('computers','dancing','exercise','flying',
    'golfing','hunting','internet','reading','traveling','other'
);

$var_arr = array('username','password','first_name','last_name',
  'email','city','state',
);

// var_dump($var_arr);

foreach ($var_arr as $v){
    $$v = (isset($_POST[$v])) ? mysqli_real_escape_string($link, trim($_POST[$v])) : '';
}

$hobbies = (isset($_POST['hobbies']) && is_array($_POST['hobbies'])) ?
mysqli_real_escape_string($link, join(', ', $_POST['hobbies'])): array();


if(isset($_POST['submit']) && $_POST['submit'] == 'Register'){
    $errors = array();
    for($i = 0; $i <4; $i++){
        if(empty($$var_arr[$i])){
            $errors[] = "$var_arr[$i] cannot be blank.";
        }
    }
    $query = "select username from site_user where username='$username'";
    $result = query();
    if(mysqli_num_rows($result) > 0){
        $errors[] = "Username $username is already registered!";
        $username = '';
    }
    mysqli_free_result($result);
    if(count($errors) > 0){
        echo "<p><strong style='color:#ff000;'>unable to register</strong></p>";
        echo "<p>please fix the following:</p>";
        echo "<ul>";
        foreach ($errors as $v){
            echo "<li>$v</li>";
        }
        echo "</ul>";
    }else{
        
        $query = <<<ENDSQL
insert into site_user (user_id,username,password) values
(null,'$username',password($password));
ENDSQL;
        $result = query();
        $user_id = mysqli_insert_id($link);
        $query = <<<ENDSQL
insert into site_user_info values
($user_id,'$first_name','$last_name','$email','$city','$state','$hobbies');
ENDSQL;
        $result = query();
        $_SESSION['logged'] = 1;
        $_SESSION['username'] = $username;
        
        header('refresh:5;url=main.php');
        echo <<<ENDHTML
<p><strong>thank you $username for registering!</strong></p>
<p>redirectring to <a href='main.php'>main page</a></p>
ENDHTML;
        die();
    }
}
?>

<html>
<body>
<form action="register.php" method="post">
<?php 
foreach ($var_arr as $v){
    echo "<label for='$v'>$v:</label>";
    echo "<input type='text' name='$v' id='$v' value='${$v}'/></br>";
}
echo "<label for='hobbies'>hobbies</label></br>";
echo "<select name='hobbies[]' id='hobbies' multiple='multiple'>";
foreach ($hobbies_list as $hobby){
    echo "<option value=$hobby ";
    if(in_array($hobby, $hobbies)){
        echo "selected=selected ";
    }
    echo ">$hobby</option>";
}
echo "</select></br>";
?>
<input type="submit" name="submit" value="Register"/>
</form>
</body>
</html>