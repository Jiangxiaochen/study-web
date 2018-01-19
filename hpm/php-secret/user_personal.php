<?php
require_once 'inc.php';
require_once 'auth.inc.php';
$query = "select * from site_user_info where user_id = (select user_id from site_user where username='$_SESSION[username]')";

$result = query();

$row = mysqli_fetch_assoc($result);
extract($row);

mysqli_free_result($result);
mysqli_close($link);

echo "<ul>";
foreach ($row as $k => $v){
    echo "<li>$k:$v</li>";
}
echo "</ul>";

