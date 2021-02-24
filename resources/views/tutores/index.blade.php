<!DOCTYPE html>
<html>
<head>
    <title>Tutores</title>
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

<h1>All the tutores</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>@lang('nombreEmpresa')</td>
            <td>@lang('tipoDocumento')</td>
            <td>@lang('documentoIdentidad')</td>
            <td>@lang('nombre')</td>
            <td>@lang('primerApellido')</td>
            <td>@lang('segundoApellido')</td>
            <td>@lang('pais')</td>
            <td>@lang('provincia')</td>
            <td>@lang('municipio')</td>
            <td>@lang('estado')</td>
            <td>@lang('telefono')</td>
            <td>@lang('email')</td>

        </tr>
    </thead>
    <tbody>
    @foreach($tutores as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nombreEmpresa }}</td>
            <td>{{ $value->tipoDocumento }}</td>
            <td>{{ $value->documentoIdentidad }}</td>
            <td>{{ $value->nombre }}</td>
            <td>{{ $value->primerApellido }}</td>
            <td>{{ $value->segundoApellido }}</td>
            <td>{{ $value->pais }}</td>
            <td>{{ $value->provincia }}</td>
            <td>{{ $value->municipio }}</td>
            <td>{{ $value->estado }}</td>
            <td>{{ $value->telefono }}</td>
            <td>{{ $value->email }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the tutor (uses the destroy method DESTROY /tutors/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the tutor (uses the show method found at GET /tutors/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('tutores/' . $value->id) }}">Show this tutor</a>

                <!-- edit this tutor (uses the edit method found at GET /tutors/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('tutores/' . $value->id . '/edit') }}">Edit this tutor</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>