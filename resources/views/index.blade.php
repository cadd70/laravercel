<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Consultoria</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.dataTables.min.css" crossorigin="anonymous">
        <style>
            .content { 
                margin-top: 70px; 
            }

            @media screen and (max-width: 768px) {
                .content { 
                    margin-top: 110px; 
                }
            }

            .select2-selection{
                width: 100%;
            }

        </style>

    </head>

    <body class="d-flex flex-column min-vh-100">
        <header>
            <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
                <div class="col-4 col-sm-6 col-md-3">
                    <a href="/"><h1 class="navbar-brand">Consultoria</h1></a>
                </div>
                <div class="col-8 col-sm-6 d-md-none text-right">
                    <a class="btn btn-light" href="#">Conta</a>
                    <a class="btn btn-light" href="#">Logout</a>
                </div>
                <div class="col-md-6 col-sm-12">
                </div>
                <div class="col-md-3 d-none d-md-block text-right">
                    <a class="btn btn-light" href="#">Conta</a>
                    <a class="btn btn-light" href="#">Logout</a>
                </div>
            </nav>
        </header>

        <div class="container">  
            <div class="content">
                <div class="row text-center">
                    <div class="col-12 col-sm-6 my-4">
                        <a class="btn btn-dark mx-2" href="/deputados"><h1>Deputados</h1></a>
                    </div>
                    <div class="col-12 col-sm-6 my-4">
                        <a class="btn btn-dark mx-2" href="/senadores"><h1>Senadores</h1></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="mt-auto bg-light text-center text-lg-start">
            <!-- Grid container -->
            <div class="container mt-2">
            <!--Grid row-->
                <div class="row">
                    
                    <!--Grid column-->
                    <div class="footer col-sm-12 mb-md-0">
                        <p style="vertical-align: middle;">
                            <b>Consultoria nas redes sociais:</b> <br class="d-sm-none">
                            <a class="text-dark mx-2" href=""><i class="fab fa-twitter-square fa-2x"></i></a>
                            <a class="text-dark mx-2" href=""><i class="fab fa-facebook-square fa-2x"></i></a>
                            <a class="text-dark mx-2" href=""><i class="fab fa-instagram-square fa-2x"></i></a>
                            <a class="text-dark mx-2" href=""><i class="fab fa-whatsapp-square fa-2x"></i></a>
                        </p>
                        <p><b>Telefone:</b> +55 (99) 9999-9999 &nbsp;  <br class="d-sm-none"> <b>E-mail:</b> email@consultoria.com.br  &nbsp; <br class="d-lg-none"> <b>Endereço:</b> Rua Um, Número 20, Bairro, Cidade-UF</p> 
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->
        </footer>
        <!-- Footer -->            
    </body>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/fontawesome/js/all.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js" integrity="sha256-uVEHWRIr846/vAdLJeybWxjPNStREzOlqLMXjW/Saeo=" crossorigin="anonymous"></script>
    <script>

    </script>
</html>
