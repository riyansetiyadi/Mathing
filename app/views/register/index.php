<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
	<div class="container">
<form action="<?= BASEURL ?>/Register/registerPermission" method="post">
    <label for="username">Username </label>
    <input type="text" name="username">
    <label for="password">Password </label>
    <input type="text" name="password">
    <button type="submit" name="register">Register</button>
</form>
<a href="<?= BASEURL ?>/Login">Login</a>
</div>
</body>
</html>
