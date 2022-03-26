<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us!</title>
</head>
<body>
	<form action="{{route('contact')}}" method="post">
		@csrf
		<input type="text" name="name" placeholder="Your name">
		<input type="email" name="email" placeholder="Your valid email">
		<textarea name="message" cols="30" rows="10" placeholder="your message"></textarea>
		<button type="submit">Submit</button>
	</form>
</body>
</html>