<?php
if(!empty($_COOKIE)){
    echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';
}else{
    echo '<p>No cookies are set.</p>';
}

?>

<p>
<a href='cookies_test.php'>back to main test page</a>
</p>