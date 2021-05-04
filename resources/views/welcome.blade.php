<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Consultoria</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
        <style>
            .content { 
                margin-top: 70px; 
                margin-bottom: 110px;
            }

            @media screen and (max-width: 768px) {
                .content { 
                    margin-top: 110px; 
                    margin-bottom: 130px;
                }
            }
        </style>


    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
                <div class="col-4 col-sm-6 col-md-3">
                    <h1 class="navbar-brand">Consultoria</h1>
                </div>
                <div class="col-8 col-sm-6 d-md-none text-right">
                    <a class="btn btn-light" href="#">Conta</a>
                    <a class="btn btn-light" href="#">Logout</a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <select name="" id="" class="form-control">
                        <option value="" selected>Selecione um Parlamentar</option>
                    </select>    
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

                    <div class="card mb-3">
                        <div class="card-header bg-dark text-white">
                            <h1>Deputado Federal <br class="d-md-none"><b>Carlos Alberto</b> <br class="d-lg-none"><small>Partido: <b>WXZY</b></small></h1>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img height="250" width="180" src="{{ asset('images/no-user-picture.jpg') }}" alt="no-user-picture">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-light text-center text-lg-start">
            <!-- Grid container -->
            <div class="container mt-2">
            <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="footer col-sm-12 mb-md-0">
                        <p style="vertical-align: middle;">
                            <b>Consultoria nas redes sociais:</b> 
                            <a class="text-dark mx-2" href=""><i class="fab fa-twitter-square fa-2x"></i></a>
                            <a class="text-dark mx-2" href=""><i class="fab fa-facebook-square fa-2x"></i></a>
                            <a class="text-dark mx-2" href=""><i class="fab fa-instagram-square fa-2x"></i></a>
                            <a class="text-dark mx-2" href=""><i class="fab fa-whatsapp-square fa-2x"></i></a>
                        </p>
                        <p><b>Telefone:</b> +55 (99) 9999-9999 &nbsp;   <b>E-mail:</b> email@consultoria.com.br  &nbsp; <br class="d-lg-none"> <b>Endereço:</b> Rua Um, Número 20, Bairro, Cidade-UF</p> 
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
</html>
