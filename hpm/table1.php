<?php 
$link = mysqli_connect("localhost","root","123") or die("connect failed");

mysqli_select_db($link, "moviesite") or die(mysqli_error($link));

$query = 'select * from movie order by movie_name asc, movie_year desc';
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<html>
<body>
<div style="text-align: center">
<h2>Movie Review Database</h2>
<table border=1 cellpadding=2 cellspacing=2 style="width: 70%;
margin-left:auto;margin-right:auto">
<tr>
<th>Movie Tile</th>
<th>Year of Release</th>
<th>Movie Director</th>
<th>Movie lead</th>
<th>Movie Type</th>
</tr>
<?php 
function getPeopleName($id){
    global $link;
    $query = "select people_fullname from people where people_id=$id";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $row = mysqli_fetch_assoc($result);
    extract($row);
    return $people_fullname;
}

function getTypeLabel($id){
    global $link;
    $query = "select movietype_label from movietype where movietype_id=$id";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $row = mysqli_fetch_assoc($result);
    extract($row);
    return $movietype_label;
}
while($row = mysqli_fetch_assoc($result)){
    extract($row);
    echo '<tr>';
    echo '<td>',"<a href=movie_details.php?movie_id=$movie_id title=click here>",$movie_name,"</a>",'</td>';
    echo '<td>',$movie_year,'</td>';
    echo '<td>',getPeopleName($movie_director),'</td>';
    echo '<td>',getPeopleName($movie_leadactor),'</td>';
    echo '<td>',getTypeLabel($movie_type),'</td>';
    echo '</tr>';
}
?>
</table>
</div>
</body>
</html>

