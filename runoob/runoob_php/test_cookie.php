<?php
$name1 = 'www.jxc.com';
$name2 = 'www_jxc_com';
setcookie($name2,'jxc',time()+3600);
?>



<?php
if (isset($_COOKIE[$name2]))
	echo "欢迎 " . $_COOKIE[$name2] . "!<br>";
else
	echo "普通访客!<br>";
?>