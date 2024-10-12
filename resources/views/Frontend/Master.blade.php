<!DOCTYPE html>
<html lang="en">
<head>
@include('Frontend.includes.meta')  
<title>@yield('title')</title>
@include('Frontend.includes.faviconFont')
@include('Frontend.includes.css')
</head>
<body>
@include('Frontend.includes.menubar')
@yield('body')
@include('Frontend.includes.scrollup')
@include('Frontend.includes.preloder')
@include('Frontend.includes.script')
</body>
</html>