<?php

function file_info(){
	if($_FILES['file']['error'] > 0){
		echo "wrong: ", $_FILES['file']['error'], '<br>';
	}else{
		echo 'file name: ', $_FILES['file']['name'], '<br>';
		echo 'file type: ', $_FILES['file']['type'], '<br>';
		echo 'file size: ', $_FILES['file']['size'] / 1024, 'kb', '<br>';
		echo 'file loca: ', $_FILES['file']['tmp_name'], '<br>';
	}
}

function save_upload(){
	if(file_exists('upload/'.$_FILES['file']['name'])){
		echo $_FILES['file']['name'], 'exists', '<br>';
	}else{
		move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$_FILES['file']['name']);
	}
	echo 'file saved at upload/',$_FILES['file']['name'],'<br>';
}



$allowedExts = array('gif','jpeg','jpg','png');
$temp = explode('.', $_FILES['file']['name']);
$extension = end($temp);

if($_FILES['file']['size'] < 204800 && in_array($extension, $allowedExts)){
	file_info();	
	save_upload();			
}else{
	echo "invalid file";
}


