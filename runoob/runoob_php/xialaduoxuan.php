<?php
$q = isset($_POST['q']) ? $_POST['q'] : '';
if(is_array($q)){
	$sites = array(
		'jxc' => '我的主页<br>https://www.jxc.com',
		'google' => '谷歌搜索<br>https://www.google.com',
		'taobao' => '淘宝<br>https://www.taobao.com'
	);
	foreach ($q as $key => $value) {
		echo $sites[$value].PHP_EOL;
	}
}else{
?>

<form action = '' method = 'post'>
	<select multiple="multiple" name="q[]">
		<option value=''>选择一个站点</option>
		<option value="jxc">我的主页</option>
		<option value="google">谷歌搜索</option>
		<option value="taobao">淘宝购物</option>
	</select>
	<input type="submit" name="提交">
</form>

<?php
}
?>
