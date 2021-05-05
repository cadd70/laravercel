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
                    <h1 class="navbar-brand">Consultoria</h1>
                </div>
                <div class="col-8 col-sm-6 d-md-none text-right">
                    <a class="btn btn-light" href="#">Conta</a>
                    <a class="btn btn-light" href="#">Logout</a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <select id="iIdFichaCadastralParlamentar" class="form-control" width="100%">
                        <option value="" selected>Selecione um Parlamentar</option>
                        @foreach($listaParlamentares as $parlamentar)
                            <option value="{{ $parlamentar->iIdFichaCadastralParlamentar }}">{{ $parlamentar->cNomeParlamentar }}</option>
                        @endforeach
                    </select>    
                </div>
                <div class="col-md-3 d-none d-md-block text-right">
                    <a class="btn btn-light" href="#">Conta</a>
                    <a class="btn btn-light" href="#">Logout</a>
                </div>
            </nav>
        </header>

        @if(isset($dadosParlamentar))
            <div class="container">  
                <div class="content">
                    <div class="row text-center">
                        <div class="card mb-3 p-0 col-12">
                            <div class="card-header bg-dark text-white">
                                <h2>{{ $dadosParlamentar->cTipoFuncaoParlamento }} <br class="d-md-none"><b>{{ $dadosParlamentar->cNomeParlamentar }}</b> <br class="d-lg-none"><small>Partido: <b>{{ $dadosParlamentar->partidos->cSiglaPartido }}/{{ $dadosParlamentar->partidos->cUfPartido }}</b></small></h2>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-sm-3 col-md-3 col-lg-2">
                                    <img height="200" width="auto" src="{{ $dadosParlamentar->cLinkFotoParlamentar }}" alt="no-user-picture">
                                </div>
                                <div class="col-sm-9 col-md-9 col-lg-10">
                                    <div class="card-body text-left">
                                        <div class="row">
                                            <div class="col-12 col-sm mb-2">
                                                <label class="font-weight-bold">E-mail:</label>
                                                <p class="card-text">{{ $dadosParlamentar->cEmailParlamentar }}</p>
                                            </div>
                                            <div class="col-6 col-sm mb-2">
                                                <label class="font-weight-bold">Telefone:</label>
                                                <p class="card-text">{{ $dadosParlamentar->cTelefoneParlamentar }}</p>
                                            </div>
                                            <div class="col-6 col-sm mb-2">
                                                <label class="font-weight-bold">Gabinete:</label>
                                                <p class="card-text">{{ $dadosParlamentar->iNumeroGabinete }}</p>
                                            </div>
                                            <div class="col-12 col-sm mb-2">
                                                <label class="font-weight-bold">Profissão TSE:</label>
                                                <p class="card-text">{{ $dadosParlamentar->cProfissaoParlamentar }}</p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row d-sm-none d-lg-flex text-center">
                                            <div class="col-12 col-sm">
                                                <label class="font-weight-bold">Qtd. de Votos:</label>
                                                <h3>{{ number_format($dadosParlamentar->quantidadeVotos->sum('iQuantidadeVotos'), 0, ',', '.') }}</h3>
                                            </div>
                                            <div class="col-12 col-sm">
                                                <label class="font-weight-bold">Receita de Campanha:</label>
                                                <h3>R$ {{ number_format($dadosParlamentar->doacao->sum('nValorDoacao'), 0, ',', '.') }}</h3>
                                            </div>
                                            <div class="col-12 col-sm">
                                                <label class="font-weight-bold">Despesa de Campanha:</label>
                                                <h3>R$ {{ number_format($dadosParlamentar->doacao->sum('nValorDoacao'), 0, ',', '.') }}</h3>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 d-none d-sm-flex d-lg-none row">
                                    <div class="col-sm">
                                        <label class="font-weight-bold">Qtd. de Votos:</label> <br>
                                        <h3>{{ number_format($dadosParlamentar->quantidadeVotos->sum('iQuantidadeVotos'), 0, ',', '.') }}</h3>
                                    </div>
                                    <div class="col-sm">
                                        <label class="font-weight-bold">Receita de Campanha:</label> <br>
                                        <h3>R$ {{ number_format($dadosParlamentar->doacao->sum('nValorDoacao'), 0, ',', '.') }}</h3>
                                    </div>
                                    <div class="col-sm">
                                        <label class="font-weight-bold">Despesa de Campanha:</label> <br>
                                        <h3>R$ {{ number_format($dadosParlamentar->doacao->sum('nValorDoacao'), 0, ',', '.') }}</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="card p-0 col-12 col-lg-6">
                            <div class="card-header p-0 bg-dark text-white">
                                <h5>Quantidade de Votos por Município</h5>
                            </div>
                            <div class="card-body p-0 text-left">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Município</th>
                                                <th>Qtd. de Votos</th>
                                                <th>% sobre Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dadosParlamentar->quantidadeVotos as $votos)
                                                <tr>
                                                    <td>{{ $votos->cNomeMunicipio }}</td>
                                                    <td>{{ number_format($votos->iQuantidadeVotos, 0, ',', '.') }}</td>
                                                    <td>{{ $votos->dPorcentagemVotos }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card p-0 col-12 col-lg-6">
                            <div class="card-header p-0 bg-dark text-white">
                                <h5>Doações de Campanha</h5>
                            </div>
                            <div class="card-body p-0 text-center chart-container" style="height: 250px; overflow-y: scroll;">
                                <canvas class="" id="canvasDoacoes"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        @else
            <div class="container">  
                <div class="content">
                    <div class="row text-center">
                        <div class="card mb-3 col-12">
                            <div class="card-header bg-dark text-white">
                                <h1>Selecione um Parlamentar</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @endif

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
        $('#iIdFichaCadastralParlamentar').change(function(){
            window.location.href = `/{{ $cTipoParlamentar }}/${this.value}`;
        });

        $(document).ready( function () {
            $('#iIdFichaCadastralParlamentar').select2({
                language: 'pt-BR',
                width: '100%'
            });

            let arrayNomes = [];
            let arrayValores = [];
            $.each(@json($dadosParlamentar->doacao), function(key, item) {
                arrayNomes.push(item.cNomeDoador);
                arrayValores.push(item.nValorDoacao);
            });

            let canvas = document.getElementById('canvasDoacoes').getContext('2d');
            let chartDoacoes = new Chart(canvas, {
                type: 'bar',
                data: {
                    labels: arrayNomes,
                    datasets: [
                        {
                            label: ['Valor'],
                            data: arrayValores,
                        }
                    ]
                },
                options: {
                    indexAxis: 'y',
                    scales: {
                        x: {
                            ticks: {
                                display: false
                            },
                        }
                    },
                    responsive: true
                }
            });

            $('table').DataTable({
                responsive:       true,
                paging:           false,
                searching:        false,
                info:             false,
                order:            false,
                scrollY:          250,
                fixedHeader:      true,
                language: {
                    sEmptyTable: "Nenhum registro encontrado",
                    sInfo: "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    sInfoEmpty: "Mostrando 0 até 0 de 0 registros",
                    sInfoFiltered: "(Filtrados de _MAX_ registros)",
                    sInfoPostFix: "",
                    sInfoThousands: ".",
                    sLengthMenu: "Mostrar _MENU_ resultados por página",
                    sLoadingRecords: "Carregando...",
                    sProcessing: "Processando...",
                    sZeroRecords: "Nenhum registro encontrado",
                    sSearch: "Pesquisar",
                    oPaginate: {
                        sNext: "Próximo",
                        sPrevious: "Anterior",
                        sFirst: "Primeiro",
                        sLast: "Último"
                    },
                    oAria: {
                        sSortAscending: "Ordenar colunas de forma ascendente",
                        sSortDescending: " Ordenar colunas de forma descendente"
                    }
                },
            });
        } );
    </script>
</html>
