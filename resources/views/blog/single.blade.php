<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> home </title>
</head>
<body>
<h1>Selamat Datang  di blog ini </h1>
<h2> {{ $blog }} !! </h2>

@foreach($users as $userx)
<li> {{ $userx }} <li>
@endforach

</body>
</html>