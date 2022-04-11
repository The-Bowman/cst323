<?php ?>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    body, html {
    height: 100%;
    font-family: Montserrat-Regular, sans-serif;
    background-color: gray;
	}
    </style>
</head>
<body>
	<header>
	@include('layouts.header')
	</header>
    
    <div align="center">
        @yield('content')
    </div>

	<footer>
	@include('layouts.footer')
	</footer>
</body>
</html>
