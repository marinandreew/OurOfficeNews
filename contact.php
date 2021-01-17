<!DOCTYPE html>
<html lang="en">
  <head>
        <meta carset="UTF-8">
        <link rel="stylesheet" href="css/main.css">
        <title>Our Office News</title>
  </head>
  <body>
    <form method="POST" action="send.php">		
		<input type="text" name="name" class="inputs" placeholder="title" required>
		<input type="email" name="email" class="inputs" placeholder="username" required>
		<textarea name="message" class="inputs" placeholder="Message" required></textarea>
		<button type="submit">Send</button>
	</form>
</body>
</html>