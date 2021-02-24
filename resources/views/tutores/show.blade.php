<!DOCTYPE html>
<html>
<head>
    <title>Tutor App</title>
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

<h1>Showing {{ $tutor->nombre }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $tutor->nombre }}</h2>
        <p>
            <strong>Email:</strong> {{ $tutor->email }}<br>
            <strong>DNI:</strong> {{ $tutor->documentoIdentidad }}<br>
        </p>
    </div>

</div>
</body>
</html>