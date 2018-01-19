<?php

// include "i1.php";

// $a = $mydir."/../i2.php";
// // echo $a;
// include $a;
$mydir = dirname(__FILE__);
require_once $mydir."/../include/include1.php";


// $query = 'alter table movie add column
//     (movie_running_time tinyint unsigned null,
//     movie_cost decimal(4,1) null,
//     movie_takings decimal(4,1) null)';

// mysqli_query($link, $query) or die(mysqli_error($link));

$query = 'update movie set movie_running_time = 101,
    movie_cost=81,movie_takings=242.6 where movie_id = 1';

mysqli_query($link, $query) or die(mysqli_error($link));