<!DOCTYPE html>
<html lang="en">
  <head>
        <meta carset="UTF-8">
        <link rel="stylesheet" href="css/main.css">
        <title>Our Office News</title>
  </head>
  <body>
    <div class="container1">
    <form method="POST" action="send.php">		
		<input type="text" name="name" class="inputs" placeholder="Заглавие" required>
		<input type="email" name="email" class="inputs" placeholder="Username на получател" required>
		<textarea name="message" class="inputs" placeholder="Съобщение" required></textarea>
		<button type="submit">Send</button>
	</form>
  </div>
</body>
</html>
