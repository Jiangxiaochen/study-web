<?php 
error_log("this is a error");
?>
<html>
<body>
<form action="formprocess.php" method="post">
name:<input type="text" name="name"></br>
greeting:<select name="greeting">
<option value="hello">hello</option>
<option value="halo">halo</option>
<option value="bonjour">bonjour</option>
</select><br>
movie_type:<select name="movie_type">
<option value="action">Action</option>
<option value="drama">drama</option>
<option value="comedy">comedy</option>
<option value="sci-fi">"sci-fi"</option>
</select><br/>
<input type="checkbox" name="debug" checked="checked"/>display debug info
<input type="radio" name="type" value="movie" checked="checked"/>mOvie<br>
<input type="radio" name="type" value="actor" />Actor<br>
<input type="radio" name="type" value="director" />Director<br>

<br><input type="submit" name="submit" value="search"/>
<br><input type="submit" name="submit" value="add"/>
</form>
</body>
</html>