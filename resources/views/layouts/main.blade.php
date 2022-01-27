<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="/css/dashboard.css" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">

<style>
    body {
      color: #353333;
      background-color: rgb(221, 226, 236);
    }
</style>
@include('layouts.header')
</head>
<body class="color=secondary">
    <div class="container">
        @yield('container')
    </div>
</body>
</html>
