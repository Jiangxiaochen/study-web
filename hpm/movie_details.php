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

function calculate_differences($takings,$cost){
    $difference = $takings - $cost;
    if($difference < 0){
        $color = 'red';
    }elseif($difference > 0){
        $color = 'green';
    }else{
        $color = 'blue';
    }
    $difference = '$'.abs($difference).'million';
    return '<span style="color:'.$color.';">'.$difference.'</span>';
}

function genRatings($rating){
    $movie_rating = "";
    for($i = 0; $i < $rating; $i++){
        $movie_rating .= <<<ENDHTML
        <img src="images/star.jpg" alt="staro" width=15 height=15 />
ENDHTML;
    }
    return $movie_rating;
}
include_once 'include/include1.php';

$query = 'select * from movie where movie_id='.$_GET['movie_id'];

$result = mysqli_query($link, $query) or die(mysqli_error($link));

$row = mysqli_fetch_assoc($result);

extract($row);
$movie_health = calculate_differences($movie_takings, $movie_cost);
$movie_running_time .= ' mins';
$movie_takings .= ' million';
$movie_cost .= ' million';
$movie_director = getPeopleName($movie_director);
$movie_leadactor = getPeopleName($movie_leadactor);

echo <<<MYHTML
<html>
<head>
<title>Details and Reviews for: $movie_name</title>
</head>
<body>
<div style="text-align: center;">
<h2>$movie_name</h2>
<h3><em>Details</em></h3>
<table cellpadding="2" cellspacing="2" style="width: 70%
margin-left:auto;margin-right:auto">
<tr>
<td><strong>Title</strong></td>
<td>$movie_name</td>
<td><strong>Release Year</strong></td>
<td>$movie_year</td>
</tr>
<tr>
<td><strong>Movie Director</strong></td>
<td>$movie_director</td>
<td><strong>Cost</strong></td>
<td>$movie_cost</td>
</tr>
<tr>
<td><strong>Lead Actor</strong></td>
<td>$movie_leadactor</td>
<td><strong>Taking</strong></td>
<td>$movie_takings</td>
</tr>
<tr>
<td><strong>Running Time</strong></td>
<td>$movie_running_time</td>
<td><strong>Health</strong></td>
<td>$movie_health</td>
</tr>
</table>
MYHTML;

$query = <<<ENDSQL
select * from reviews where review_movie_id = $_GET[movie_id] order
    by review_date desc
ENDSQL;
    
$result = mysqli_query($link, $query) or die(mysqli_error($link));

echo <<<ENDHTML
<h3><em>Reviews</em></h3>
<table cellpadding=2 cellspacing=2
sytle="width:90%; margin-left:auto;margin-right:auto;">
<tr>
    <th>Date</th>
    <th>Reviewer</th>
    <th>Comments</th>
    <th>Rating</th>
</tr>
ENDHTML;

while ($row = mysqli_fetch_assoc($result)){
    $date = $row['review_date'];
    $name = $row['reviewer_name'];
    $comment = $row['review_comment'];
    $rating = genRatings($row['review_rating']);
    echo <<<ENDHTML
    <tr>
        <td style="vertical-align:top; text-align:center;">$date</td>
        <td style="vertical-align:top; text-align:center;">$name</td>
        <td style="vertical-align:top; text-align:center;">$comment</td>
        <td style="vertical-align:top; text-align:center;">$rating</td>
    </tr>
ENDHTML;
}


echo <<<MYHTML
</table>
</div>     
</body>
</html>
MYHTML;

?>




