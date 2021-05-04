<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Consultoria</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
        
    </head>
    <body>

        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="col-6 col-sm-6 col-md-3">
                        <h1 class="navbar-brand">Consultoria</h1>
                    </div>
                    <div class="col-3 col-sm-3 d-md-none">
                        <a class="nav-link" href="#">Conta</a>
                    </div>
                    <div class="col-3 col-sm-3 d-md-none">
                        <a class="nav-link" href="#">Logout</a>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <select name="" id="" class="form-control">
                            <option value="" selected>Selecione</option>
                        </select>    
                    </div>
                    <a class="col-md-1 d-none d-md-block" href="#">Conta</a>
                    <a class="col-md-1 d-none d-md-block" href="#">Logout</a>
            </nav>

            <div class="content">
                <div class="row text-center">
                    <div class="col-sm-12">
                        <h1>Deputado Federal <br class="d-md-none"><b>Carlos Alberto</b> <br class="d-lg-none"><small>Partido: <b>WXZY</b></small></h1>
                    </div>
                </div>
                <br>
            </div>
        </div>

    </body>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</html>
