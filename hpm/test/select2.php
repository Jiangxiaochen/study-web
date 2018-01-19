<?php
$link = mysqli_connect("localhost","root","123") or die("connect mysql failed!");

mysqli_select_db($link, "moviesite") or die(mysqli_error($link));

$query = 'select movie_name,movie_type from movie where movie_year > 1990 order by movie_type';

$result = mysqli_query($link, $query) or die(mysqli_error($link));


echo '<table border=1>';
while($row = mysqli_fetch_assoc($result)){
    echo '<tr>';
    foreach ($row as $key => $value){
        echo '<td>',$key," : ",$value,'</td>';
    }
    echo '</tr>';
}
echo '</table>';