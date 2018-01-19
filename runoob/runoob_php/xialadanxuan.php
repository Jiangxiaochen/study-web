<?php
$q = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
if($q){
    if($q == 'jxc'){
        echo '我的主页<br>http://www.jxc.com';
    }elseif($q == 'google'){
        echo '谷歌搜索<br>http://www.google.com';
    }elseif($q == 'taobao'){
        echo '淘宝<br>http://www.taobao.com';
    }
}else{
?>
<form action="" method="get">
    <select name = 'q'>
        <option value = "">select a site:</option>
        <option value = "jxc">jxc</option>
        <option value = 'google'>google</option>
        <option value = 'taobao'>taobao</option>
    </select>
    <input type = "submit" value = 'submit'>
</form>
<?php
}
?>
