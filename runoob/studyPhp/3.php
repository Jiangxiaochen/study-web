<?php
if(strpos($_SERVER['HTTP_USER_AGENT'],'MSIE') !== FALSE){
?>
<h3>strpos()返回真</h3>
<p>用户正在使用Internet Explorer。</p>
<?php
}else{
?>
<h3>strpos()返回假</h3>
<p>用户没有使用Internet Explorer。</p>
<?php
}
?>
