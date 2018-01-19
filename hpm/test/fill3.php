<?php
require_once 'inc.php';

$query = 'create table if not exists reviews (
    review_movie_id integer unsigned not null,
    review_date date not null,
    reviewer_name varchar(255) not null,
    review_comment varchar(255) not null,
    review_rating tinyint unsigned not null default 0,
    key (review_movie_id)
    )engine=myisam';
    
queryDie();

$query = <<<ENDSQL
insert into reviews values
(1,"2008-09-23","john doe","i thought this was a great movie.",4),
(1,"2008-09-23","billy bob","i liked eraserhead better.",2),
(1,"2008-09-28","peppermint patty","i wish i'd have seen it sooner!",5),
(2,"2008-09-23","marvin martin","this is my favorite movie.!",5),
(3,"2008-09-25","george b","i liked this movie!",3)
ENDSQL;

queryDie();

echo "reviews updated!";
