<?php
if($_POST['type'] == "movie" && $_POST['movie_type'] == "action"){
    header("location: form.php");
}
echo "welcome $_POST[name]";
echo "<pre>";
print_r($_POST);
echo "</pre>";
