<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">

</head>


<body class="w-100">
    <!--Nav bar-->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>

    <!--Form-->
    <form method="POST" action="/form" class="container mt-5">
        @csrf
        <div>
            <h2>
                Tutor de la empresa
            </h2>


            <div class="form-row">
                <div class="form-group">
                    <label for="nombreEmpresa">Empresa</label>
                    <input type="text" class="form-control" name="nombreEmpresa" value="{{ old('nombreEmpresa') }}" placeholder="Empresa S.L.">
                </div>
                <div class="form-group col-md-4">
                    <label for="tipoDocumento">Tipo documento</label>
                    <select name="tipoDocumento" value="{{ old('tipoDocumento') }}"> class="form-control">
                        <option value="DNI">DNI</option>
                        <option value="NIE">NIE</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="documentoIdentidad">Documento identidad</label>
                    <input type="tel" class="form-control" name="documentoIdentidad" value="{{ old('documentoIdentidad') }}" placeholder="+34 971123456">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" autocomplete="locality" placeholder="Palma de Mallorca">
                </div>
                <div class="form-group col-md-4">
                    <label for="primerApellido">Primer apellido</label>
                    <input type="text" class="form-control" name="primerApellido" value="{{ old('primerApellido') }}" autocomplete="street-address" placeholder="C/ Aragó 21">
                </div>
                <div class="form-group col-md-4">
                    <label for="segundoApellido">Segundo apellido</label>
                    <input type="number" class="form-control" name="segundoApellido" value="{{ old('segundoApellido') }}" autocomplete="postal-code" placeholder="07006">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="pais">País documento identidad</label>
                    <input type="text" class="form-control" name="pais" value="{{ old('pais') }}" autocomplete="locality" placeholder="Palma de Mallorca">
                </div>
                <div class="form-group col-md-4">
                    <label for="provincia">provincia</label>
                    <input type="text" class="form-control" name="provincia" value="{{ old('provincia') }}" autocomplete="street-address" placeholder="C/ Aragó 21">
                </div>
                <div class="form-group col-md-4">
                    <label for="municipio">municipio</label>
                    <input type="number" class="form-control" name="municipio" value="{{ old('municipio') }}" autocomplete="postal-code" placeholder="07006">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="estado">Estado</label>
                    <select name="estado" class="form-control">
                        <option value="activo" selected>Activo</option>
                        <option value="activo">Activo</option>
                        <option value="inactivo" selected>inactivo</option>
                        <option value="inactivo">inactivo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="telefono">telefono</label>
                    <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" placeholder="Centre Empresa">
                </div>

                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="tel" class="form-control" name="email" value="{{ old('email') }}" placeholder="+34 971123456">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <!--Footer-->
    <footer class="pt-4 my-md-5 pt-md-5 border-top container">
        <div class="row">
            <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">&copy; 2020-2021</small>
                <small class="d-block mb-3 text-muted">Daniel Arqués Toro</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>
</body>

</html>