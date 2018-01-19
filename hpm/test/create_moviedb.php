<?php
$db = mysqli_connect("localhost","root","123") or die("connect mysql failed!");

$sql = "create database if not exists moviesite";

mysqli_query($db, $sql);

mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$sql = 'create table if not exists movie(
        movie_id integer unsigned not null auto_increment,
        movie_name varchar(255) not null,
        movie_type tinyint not null default 0,
        movie_year smallint unsigned not null default 0,
        movie_leadactor integer unsigned not null default 0,
        movie_director integer unsigned not null default 0,
        primary key(movie_id),
        key movie_type(movie_type,movie_year)
    ) engine=myisam';
    
mysqli_query($db, $sql) or die(mysqli_error($db));

$sql = 'create table if not exists movietype(
        movietype_id tinyint unsigned not null auto_increment,
        movietype_lable varchar(100) not null,
        primary key(movietype_id)
    ) engine=myisam';

mysqli_query($db, $sql) or die(mysqli_error($db));


$sql = 'create table if not exists people(
    people_id integer unsigned not null auto_increment,
    people_fullname varchar(255) not null,
    people_isactor tinyint(1) unsigned not null default 0,
    people_isdirector tinyint(1) unsigned not null default 0,
    primary key(people_id)
    )engine=myisam';

mysqli_query($db, $sql) or die(mysqli_error($db));

echo "movie database successfully created!";
