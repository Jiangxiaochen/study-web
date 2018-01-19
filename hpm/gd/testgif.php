<?php 
if(isset($_POST['submit'])){
    
    $img = imagecreatefromgif($_FILES['uploadfile']['tmp_name']);
    //header('Content-Type: image/gif');
    imagegif($img,'D:\workspace\images\enen.gif');
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    print_r(gd_info());
    echo "</pre>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="testgif.php" method="post" enctype="multipart/form-data">
your name: <input type="text" name="username" /><br/>
upload image: <input type="file" name="uploadfile" /><br/>
image caption: <input type="text" name="caption"/><br/>
<input type="submit" name="submit" value="upload"/>
</form>
</body>
</html>

