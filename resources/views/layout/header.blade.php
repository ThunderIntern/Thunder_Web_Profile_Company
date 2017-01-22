<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>@yield('title')</title>
</head>
<body>
<header>
<nav>
<a href='/'>home </a>
<a href='/blog'>blog </a>
<a href='/contact'>contact </a>
</nav>
</header>
<br>

@yield('content')

<br>
<footer>
	<p>
	&copy:laravel&sekolah koding	
	</p>
</footer>
</body>
</html>