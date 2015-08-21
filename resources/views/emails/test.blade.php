<?php
$name = json_decode($to, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body style="color: #428bca; font-family: ‘Palatino Linotype’, ‘Book Antiqua’, Palatino, Arial sans-serif;">
	<div style="width: 600px; margin: auto; padding: 1px 20px 10px 20px; background: black;">
		<img src="http://puu.sh/bN4Kd.png" alt="banner" style="width: 100%;">
		<img src="http://puu.sh/bN1e8.ico" alt="logo" style="float: right; margin: 5px 10px 0 0" width="120px" />
		<div>
			<h1>Hi <i>{{ ucwords($name['name']) }}</i>!</h1>
			<br />
			<h3>You have a new message from :</h3>
			<ul style="list-style-type: square;">
				<li>Name: <i>{{ ucwords($from) }}</i></li>
				<li>eMail: {{ $email }}</li>
				<li>Date: {{ date('l jS \of F Y \a\t h:i:s A') }}</li>
				<li>Subject: <b>{{ $subject }}</b></li>
			</ul>
			<p style="margin: 10px 50px; padding: 10px; color: white;">{{ $body }}</p>
			<br />
			<a href="mailto:{{ $email }}?subject={{ urlencode('Re: '.$subject) }}">
				<button style="cursor: pointer; margin: 5px 0 0 10px; float: left; border-radius: 5px; font-size: 18px; color: white; border: none; background: #458BCB; padding: 10px 20px 10px 20px; text-decoration: none;">Reply</button>
			</a>
			<div style="border-top: 1px solid #428bca; margin: 5px 10px 0 0; padding: 0 10px; float: right;">
				<p>Done by WebPatalot. &radic;</p>
			</div>
		</div>
		<img src="http://puu.sh/bN4Kd.png" alt="banner" style="width: 100%; clearfix: both;">
	</div>
</body>
</html>