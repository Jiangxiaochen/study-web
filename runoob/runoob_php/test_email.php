<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	To: 	 <input type="text" name="to"><br>
	Subject: <input type="text" name="subject"><br>
	Message: <textarea name="message" rows="5" cols="40"></textarea><br>
	<input type="submit" name="submit" value="submit">
</form>

<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$to = $_POST["to"];
		$su = $_POST["subject"];
		$ms = $_POST["message"];

		mail(to, su, ms);
	}
?>