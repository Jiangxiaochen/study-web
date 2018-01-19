<?php
require_once 'inc.php';

$query = <<<ENDSQL
create table if not exists images(
    image_id integer not null auto_increment,
    image_caption varchar(255) not null,
    image_username varchar(255) not null,
    image_filename varchar(255) not null default "",
    image_date date not null,
    primary key(image_id)
)
engine=myisam
ENDSQL;

queryDie();

