<?php
require_once 'inc.php';

?>

<html>
<head>
<style type="text/css">
th {background-color:#999;}
.odd_row {background-color:#EEE;}
.even_row {background-color:#FFF;}
</style>
</head>
<body>
<table style="width: 100%;">
<tr>
<th>image</th>
<th>caption</th>
<th>uploaded by</th>
<th>date uploaded</th>
</tr>

<?php 
$query = 'select * from images';
$result = query();
$odd = true;
while($rows = mysqli_fetch_assoc($result)){
    echo ($odd == true) ? '<tr class="odd_row">' : '<tr class="even_row">';
    $odd = !$odd;
    extract($rows);
    echo <<<ENDHTML
    <td>
    <a href='$image_dir/$image_filename'>
    <img src="$thumb_dir/$image_filename">
    </a>
    </td>
    <td>$image_caption</td>
    <td>$image_username</td>
    <td>$image_date</td>
    </tr/>
ENDHTML;
}
?>
</table>
</body>
</html>