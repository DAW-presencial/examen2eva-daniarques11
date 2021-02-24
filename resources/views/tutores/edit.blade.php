<!DOCTYPE html>
<html>
<head>
    <title>tutor App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('tutores') }}">tutor Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('tutores') }}">View All tutores</a></li>
        <li><a href="{{ URL::to('tutores/create') }}">Create a tutor</a>
    </ul>
</nav>

<h1>Edit {{ $tutor->name }}</h1>

NO IMPLEMENTADO

</div>
</body>
</html>