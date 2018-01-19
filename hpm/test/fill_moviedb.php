<?php
$link = mysqli_connect("localhost","root","123") or die("connect mysql failed!");

mysqli_select_db($link, "moviesite") or die(mysqli_errno($link));

$query = 'insert into movie values
    (1,"Bruce Almighty",5,2003,1,2),
    (2,"Office Space",5,1999,5,6),
    (3,"Grand Canyon",2,1991,4,3)';

$query = 'insert into movietype values
    (1,"Sci Fi"),
    (2,"Drama"),
    (3,"Adventure"),
    (4,"War"),
    (5,"Comedy"),
    (6,"Horror"),
    (7,"Action"),
    (8,"Kids")';

$query = 'insert into people values
    (1,"Jim Carrey",1,0),
    (2,"Tom Shadyac",0,1),
    (3,"Lawrence Kasdan",0,1),
    (4,"Kevin Kline",1,0),
    (5,"Ron Livingston",1,0),
    (6,"Mike Judge",0,1)';
    
    
mysqli_query($link, $query) or die(mysqli_error($link));

