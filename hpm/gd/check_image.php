<?php

require_once 'inc.php';

if($_FILES['uploadfile']['error'] != UPLOAD_ERR_OK){
    switch($_FILES['uploadfile']['error']){
        case UPLOAD_ERR_INI_SIZE:
            die('exceed upload max filesize');
            break;
        case UPLOAD_ERR_FORM_SIZE:
            die('exceed max_file_size specified in the html form');
            break;
        case UPLOAD_ERR_PARTIAL:
            die('only partially uploaded');
            break;
        case UPLOAD_ERR_NO_FILE:
            die('no file uploaded');
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            die('server is missing a tempory folder');
            break;
        case UPLOAD_ERR_CANT_WRITE:
            die('server failed to write file to disk');
            break;
        case UPLOAD_ERR_EXTENSION:
            die('file upload stopped by extension');
            break;
    }
}
$image_caption = $_POST['caption'];
$image_username = $_POST['username'];
$image_date = @date('Y-m-d');

list($width,$height,$type,$attr) = getimagesize($_FILES['uploadfile']['tmp_name']);
switch ($type){
    case IMAGETYPE_GIF:
        $image = imagecreatefromgif($_FILES['uploadfile']['tmp_name']) or die("unsupport type");
        $ext = '.gif';
        break;
    case IMAGETYPE_JPEG:
        $image = imagecreatefromjpeg($_FILES['uploadfile']['tmp_name']) or die("unsupport type");
        $ext = '.jpg';
        break;
    case IMAGETYPE_PNG:
        $image = imagecreatefrompng($_FILES['uploadfile']['tmp_name']) or die("unsupport type");
        $ext = '.png';
        break;
   default:
       die("upsupport type");
}
$query = <<<ENDSQL
insert into images(image_caption,image_username,image_date) values
("$image_caption","$image_username","$image_date")
ENDSQL;
$result = query();
$last_id = mysqli_insert_id($link);
$imagename = $last_id . $ext;

$query = 'update images set image_filename="'.$imagename.'" where image_id='.$last_id;

$result = query();

$thumb_width = $width * 0.1;
$thumb_height = $height * 0.1;

switch ($type){
    case IMAGETYPE_GIF:
        imagegif($image,$image_dir.'/'.$imagename);
        $thumb = imagecreatetruecolor($width * 0.1, $height *0.1);
        imagecopyresampled($thumb, $image, 0, 0, 0, 0, $thumb_width, $thumb_height, $width, $height);
        imagegif($thumb,$thumb_dir.'/'.$imagename);
        break;
    case IMAGETYPE_JPEG:
        imagejpeg($image,$image_dir.'/'.$imagename);
        $thumb = imagecreatetruecolor($width * 0.1, $height *0.1);
        imagecopyresampled($thumb, $image, 0, 0, 0, 0, $thumb_width, $thumb_height, $width, $height);
        imagejpeg($thumb,$thumb_dir.'/'.$imagename);
        break;
    case IMAGETYPE_PNG:
        imagepng($image,$image_dir.'/'.$imagename);
        $thumb = imagecreatetruecolor($width * 0.1, $height *0.1);
        imagecopyresampled($thumb, $image, 0, 0, 0, 0, $thumb_width, $thumb_height, $width, $height);
        imagepng($thumb,$thumb_dir.'/'.$imagename);
        break;
}





echo <<<ENDHTML

<html>
<body>
<img alt="uploadimg" src="D:/workspace/images/$imagename">
<br/>
    image saved as: $imagename
    image type: $ext
    height: $height
    width: $width
    upload date: $image_date
</body>
</html>
ENDHTML;
