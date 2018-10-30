@extends('layouts.default')

@section('menu-principal')
    <a class="p-2" href="#sobre">Sobre</a>
    <a class="p-2" href="#cursos">Cursos</a>
    <a class="p-2" href="#conteudo">Edital Direcionado</a>
    <a class="p-2" href="#planejamento">O Planejamento</a>
    <a class="p-2" href="{{route('materiaisgratuitos')}}">Materiais Gratuitos</a>
@endsection

@section('content')

    <div class="container">
        <div id="sobre" class="row" style="margin-top: 40px;">
            <div class="col-md-4">
                <h3 style="text-align: center; text-transform: uppercase; font-size: 23px;">O que é Edital Direcionado?</h3>
                <ul style="margin-top: 25px; font-family: 'Open Sans', sans-serif; font-size: 18px; padding-left: 0">
                    <li><strong>PROJETO INOVADOR</strong> de engenharia reversa da sua prova;</li>
                    <li>100% focado numa orientação de <strong>melhor custo-benefício</strong> para seus estudos;</li>
                    <li>Resultado obtido após intensos estudos das últimas provas da banca, com todos os detalhes para
                        <strong>IMPULSIONAR SEUS ESTUDOS;</strong></li>
                    <li>Você não pode perder, assista ao vídeo e conheça mais.</li>
                </ul>
            </div>
            <div class="col-md-8">
                <div id="video-yt mr-auto" class="embed-responsive embed-responsive-16by9" style="text-align: center">
                    <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/DkrIbZNTT7U?rel=0&amp;controls=0&amp;showinfo=0"
                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col email-col justify-content-center mt-4">
                <h3 class="mb-4">Saiba mais sobre o <br>Edital Direcionado AFRFB Básico:</h3>
                <form action="https://editaldirecionado.us18.list-manage.com/subscribe/post?u=a927a9f89172e3a47834cc8a7&amp;id=7c4a4e5504"
                      method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="col-sm-12 col-md-7"
                      target="_blank">
                    <input type="email" value="" name="EMAIL" placeholder="Digite seu e-mail" class="mce-EMAIL" required id="mce-EMAIL">

                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_a927a9f89172e3a47834cc8a7_7c4a4e5504" tabindex="-1" value="">
                    </div>
                    <input type="submit" class="mt-1 mb-4 col-sm-12 btn btn-primary btn-lg"
                           value="Baixar material"/>
                </form>
            </div>

            <div class="col email-col justify-content-center mt-4">
                <h3 class="mb-4">Saiba mais sobre o <br>Edital Direcionado AFRFB Avançado:</h3>
                <form action="https://editaldirecionado.us18.list-manage.com/subscribe/post?u=a927a9f89172e3a47834cc8a7&amp;id=f01be9123b" method="post" id="mc-embedded-subscribe-form-2" name="mc-embedded-subscribe-form"
                      class="col-sm-12 col-md-7"
                      target="_blank">
                    <input type="email" value="" name="EMAIL" placeholder="Digite seu e-mail" required class="mce-EMAIL" id="mce-EMAIL-2">

                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_a927a9f89172e3a47834cc8a7_f01be9123b" tabindex="-1" value="">
                    </div>
                    <input type="submit" class="mt-1 mb-4 col-sm-12 btn btn-primary btn-lg"
                           value="Baixar material"/>
                </form>
            </div>

        </div>

    </div>

    {{--<section id="rf" style="background-color: #CCEDFF; padding: 50px">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="mt-2 text-primary col-sm-4">--}}
                    {{--<b style="color: #3F4755;">--}}
                        {{--EDITAL DIRECIONADO para a prova de Auditor Fiscal da Receita Federal do Brasil!--}}
                    {{--</b>--}}
                {{--</div>--}}
                {{--<div class="mt-2 thumb col-sm-5">--}}
                    {{--<img src="img/logo_leao.jpg" alt="" class="img-responsive" klickart-edit-not-highlight=""--}}
                         {{--klickart-image-source="src" style="width: 292px; border-radius: 0%; vertical-align: middle;">--}}
                {{--</div>--}}
                {{--<div class="mt-2 text-secondary col-sm-3">--}}
                    {{--<div style="font-weight: bold">--}}
                        {{--<b class="texts">O material que faltava para acelerar sua aprovação:</b>--}}
                    {{--</div>--}}
                    {{--<div class="">--}}
                        {{--<b class="texts">- planejamento completo;</b>--}}
                    {{--</div>--}}
                    {{--<div class="">--}}
                        {{--<b class="texts">- análise minuciosa de CADA matéria;</b>--}}
                    {{--</div>--}}
                    {{--<div class="">--}}
                        {{--<b class="texts">- padrão ESAF de cobrança;</b>--}}
                    {{--</div>--}}
                    {{--<div class="">--}}
                        {{--<b class="texts">- e muito mais...</b>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section class="listas" id="conteudo" style="padding: 60px; background-color: #f8f9fa;">

        <div class="container" style="text-align: center;">
            <h2 style=" font-weight: bold;  font-size: 1.8em">O conteúdo do EDITAL DIRECIONADO:</h2>
            <p class="mt-3 mb-3" style="color:#4e555b">Observe as inúmeras vantagens ao estudar com o EDITAL DIRECIONADO.</p>

            <div class="row">
                <div class="col-md-6" style="font-family: 'Open Sans', sans-serif; font-size: 1.3em">
                    <ul class="lista01" style="text-align: left; list-style-image: url('img/li.JPG');">
                        <li>Análise minuciosa de todas as matérias de sua prova</li>
                        <li>Estatística de incidência de cada assunto por matéria</li>
                        <li>Orientação sobre o padrão de cobranças na prova</li>
                        <li>Análise das últimas provas do órgão</li>
                        <li>A tendência de cobrança da banca nos seus últimos concursos</li>
                        <li>Planejamento completo por ciclos de estudos, ajustados em duas cargas horárias para melhor se
                            adequar ao seu perfil
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 lista02 mt-4">
                    <div class="item">
                      <span class="ico">
                          <svg klickart-edit-icon="svg" fill="#56aaac" viewbox="10 10 250 250"
                               enable-background="new 10 10 250 250"> <path
                                      d="M135,37c54.038,0,98,43.962,98,98c0,54.037-43.962,98-98,98c-54.037,0-98-43.963-98-98C37,80.962,80.963,37,135,37 M135,10C65.965,10,10,65.964,10,135c0,69.035,55.965,125,125,125s125-55.965,125-125C260,65.964,204.035,10,135,10L135,10z"></path> <path
                                      d="M135,35C79.771,35,35,79.771,35,135s44.771,100,100,100s100-44.771,100-100S190.229,35,135,35z M100.356,188.223 c0,3.541-2.874,6.414-6.414,6.414h-8.185c-3.54,0-6.413-2.873-6.426-6.428v-19.215c0.051,0,0.09,0,0.128,0 c7.056-0.219,14.071-0.848,20.896-1.848V188.223z M129.835,188.223c0,3.541-2.874,6.413-6.413,6.414l0,0h-0.001h0.001v-0.014 h-8.186c-3.54,0-6.413-2.873-6.413-6.414v-22.525c0.269-0.051,0.538-0.102,0.795-0.152c3.271-0.668,6.555-1.438,9.736-2.285 c3.554-0.949,7.081-2.014,10.48-3.182V188.223z M159.287,188.223c0,3.541-2.873,6.414-6.414,6.414v-0.014h-8.184 c-3.541,0-6.414-2.873-6.414-6.414v-31.338c0.526-0.219,1.052-0.436,1.565-0.654c6.247-2.68,12.161-5.771,17.587-9.184 c0.628-0.385,1.244-0.783,1.859-1.193V188.223z M188.753,188.223c0,3.541-2.874,6.414-6.414,6.426h-8.185 c-3.54,0-6.413-2.873-6.413-6.412v-48.553c0.897-0.732,1.771-1.463,2.616-2.207c5.504-4.811,10.172-10.07,13.906-15.625 c1.693-2.527,3.193-5.118,4.489-7.748V188.223z M193.281,95.426h-2.925c-0.333,2.604-0.86,5.171-1.591,7.724 c-1.616,5.656-4.221,11.172-7.786,16.482c-3.554,5.299-7.979,10.263-13.226,14.842c-2.617,2.284-5.439,4.478-8.453,6.569 c-1.283,0.896-2.617,1.77-3.978,2.629c-5.271,3.322-10.968,6.285-17.035,8.889c-2.745,1.182-5.567,2.271-8.453,3.297 c-3.721,1.322-7.556,2.502-11.507,3.553c-3.13,0.834-6.298,1.578-9.505,2.232c-2.797,0.564-5.606,1.066-8.454,1.488 c-6.862,1.027-13.88,1.668-21.012,1.887c-0.859,0.025-1.706,0.051-2.565,0.063c-0.013,0-0.039,0-0.052,0 c-1.771,0-3.207-1.436-3.232-3.205v-6.414c0-1.758,1.411-3.168,3.156-3.207c0.897-0.014,1.783-0.039,2.668-0.064 c7.145-0.244,14.162-0.924,21.012-2.039c2.848-0.463,5.67-1,8.453-1.617c2.091-0.461,4.156-0.963,6.209-1.514 c5.169-1.385,10.121-3.002,14.816-4.848c2.912-1.143,5.734-2.375,8.453-3.695c3.579-1.732,6.979-3.617,10.198-5.645 c3.977-2.514,7.581-5.183,10.813-8.004c3.207-2.797,6.029-5.734,8.454-8.813c0.91-1.154,1.771-2.335,2.578-3.528 c3.694-5.49,6.054-11.211,7.056-17.062h-2.938c-2.591,0-4.104-2.898-2.642-5.027l9.415-13.662c0.642-0.924,1.643-1.385,2.643-1.385 c1.001,0,2.001,0.461,2.643,1.385l9.429,13.662C197.386,92.527,195.859,95.426,193.281,95.426z"></path>
                          </svg>
                      </span>
                        <div class="description">
                            Melhore o rendimento de seus estudos
                        </div>
                    </div>

                    <div class="item">
                      <span class="ico">
                          <svg klickart-edit-icon="svg" fill="#56aaac" viewbox="10 10 250 250"
                               enable-background="new 10 10 250 250"> <path
                                      d="M135.5,37c54.038,0,98,43.963,98,98s-43.962,98-98,98s-98-43.963-98-98S81.463,37,135.5,37 M135.5,10 c-69.036,0-125,55.965-125,125s55.964,125,125,125c69.035,0,125-55.965,125-125S204.535,10,135.5,10L135.5,10z"></path> <path
                                      d="M135,35C79.771,35,35,79.771,35,135s44.771,100,100,100s100-44.771,100-100S190.229,35,135,35z M100.989,157.402 l20.339-26.215c0.947-1.219,2.369-1.998,3.903-2.154l19.401-1.873c1.489-0.146,2.866-0.879,3.813-2.031l16.763-20.338l-5.144-4.264 c-1.827-1.523-1.083-4.479,1.241-4.941l19.256-3.881c1.782-0.359,3.439,1.051,3.372,2.865l-0.688,19.256 c-0.079,2.346-2.809,3.564-4.614,2.076l-4.736-3.926l-19.696,23.938c-0.947,1.162-2.324,1.883-3.813,2.029l-19.211,1.861 c-1.545,0.146-2.966,0.926-3.913,2.156L109.9,164.328c-0.958,1.23-2.729,1.457-3.959,0.496l-4.456-3.463 C100.256,160.402,100.03,158.633,100.989,157.402z M180.121,185.818H95.519c-6.215,0-11.28-5.066-11.28-11.281V89.822 c0-3.113,2.527-5.641,5.641-5.641s5.64,2.527,5.64,5.641v84.715h84.603c3.112,0,5.641,2.527,5.641,5.641 S183.233,185.818,180.121,185.818z"></path> </svg>
                      </span>
                        <div class="description">
                            Saiba onde focar seus esforços para obter a aprovação
                        </div>
                    </div>

                    <div class="item">
                      <span class="ico">
                          <svg klickart-edit-icon="svg" fill="#56aaac" viewbox="0 0 537.891 537.891"
                               enable-background="new 0 0 537.891 537.891"> <path
                                      d="M268.945,0C120.368,0,0,120.368,0,268.945s120.368,268.945,268.945,268.945s268.945-120.368,268.945-268.945 S417.522,0,268.945,0z M269.185,461.032c-105.905,0-191.848-85.943-191.848-191.848c0-105.905,85.943-191.848,191.848-191.848 c105.904,0,191.848,85.943,191.848,191.848C461.032,375.089,375.209,461.032,269.185,461.032z"></path> <path
                                      d="M367.559,251.016h-78.891v-78.891c0-14.822-12.072-26.895-26.895-26.895c-14.822,0-26.895,12.073-26.895,26.895V277.91 c0,7.411,2.988,14.104,7.889,19.006l0,0c4.901,4.9,11.594,7.889,19.005,7.889h105.785c14.822,0,26.895-12.072,26.895-26.895 C394.453,263.088,382.381,251.016,367.559,251.016z"></path> </svg></span>
                        </span>
                        <div class="description">
                            Controle seus estudos por meio de um planejamento semanal
                        </div>
                    </div>

                    <div class="item">
                      <span class="ico">
                          <svg klickart-edit-icon="svg" fill="#56aaac" viewbox="10 10 250 250"
                               enable-background="new 10 10 250 250"> <path
                                      d="M135,37c54.037,0,98,43.963,98,98s-43.963,98-98,98s-98-43.963-98-98S80.963,37,135,37 M135,10 C65.965,10,10,65.965,10,135s55.965,125,125,125s125-55.965,125-125S204.035,10,135,10L135,10z"></path> <path
                                      d="M135,35C79.771,35,35,79.771,35,135s44.771,100,100,100s100-44.771,100-100S190.229,35,135,35z M91.507,109.973l3.889-7.5 c0.498-0.951,0.775-1.988,0.819-3.057l0.366-8.438c0.058-1.199,0.687-2.281,1.696-2.924l7.12-4.533 c0.893-0.57,1.668-1.33,2.238-2.236l4.532-7.121c0.644-1.01,1.726-1.639,2.925-1.697l8.437-0.365 c1.067-0.043,2.106-0.322,3.057-0.818l7.501-3.891c0.526-0.277,1.111-0.408,1.682-0.408s1.155,0.131,1.682,0.408l7.501,3.891 c0.95,0.496,1.989,0.775,3.056,0.818l8.438,0.365c1.199,0.059,2.281,0.688,2.925,1.697l4.532,7.121 c0.57,0.891,1.331,1.666,2.237,2.236l7.121,4.533c1.01,0.643,1.639,1.725,1.696,2.924l0.366,8.422 c0.043,1.068,0.322,2.105,0.818,3.057l3.86,7.502c0.556,1.053,0.556,2.311,0,3.363l-3.89,7.5c-0.497,0.951-0.775,1.99-0.818,3.057 l-0.366,8.438c-0.058,1.199-0.687,2.281-1.696,2.924l-5.498,3.494l-1.608,1.023c-0.892,0.57-1.667,1.332-2.237,2.238l-4.532,7.121 c-0.644,1.008-1.726,1.637-2.925,1.695l-8.247,0.365l-0.189,0.016c-0.849,0.043-1.682,0.234-2.472,0.555 c-0.204,0.074-0.395,0.162-0.584,0.264l-2.545,1.318l-4.957,2.572c-0.526,0.277-1.111,0.408-1.682,0.408s-1.155-0.131-1.682-0.408 l-7.033-3.656l-0.453-0.234c-0.95-0.496-1.989-0.775-3.057-0.818l-8.437-0.365c-1.199-0.059-2.281-0.688-2.925-1.697l-4.532-7.121 c-0.57-0.891-1.331-1.666-2.238-2.236l-2.852-1.813l-1.871-1.184l-1.872-1.186l-0.525-0.338c-1.01-0.643-1.639-1.725-1.696-2.924 l-0.366-8.436c-0.044-1.068-0.321-2.105-0.819-3.057l-3.889-7.502C90.951,112.283,90.951,111.025,91.507,109.973z M134.979,169.836 l-13.992,31.029c-0.63,1.404-1.975,2.15-3.335,2.15c-1.126,0-2.267-0.512-2.997-1.564l-8.817-12.664 c-0.688-0.979-1.799-1.564-2.998-1.564c-0.044,0-0.088,0-0.131,0l-16.845,0.586c-0.045,0-0.089,0-0.132,0 c-2.633,0-4.416-2.734-3.319-5.162l18.336-40.65l2.325,1.479c0.351,0.219,0.657,0.525,0.893,0.891l4.532,7.121 c1.403,2.209,3.816,3.598,6.434,3.713l8.438,0.367c0.409,0.014,0.833,0.131,1.213,0.32l5.396,2.795l2.105,1.096 c1.14,0.6,2.428,0.906,3.714,0.906c1.272,0,2.559-0.307,3.699-0.863l0.015-0.014L134.979,169.836z M184.125,187.779l-16.846-0.586 c-0.848-0.512-2.134,0.205-3.129,1.566l-8.817,12.662c-1.623,2.324-5.161,2.002-6.331-0.586l-11.596-25.707l8.408-18.643 l1.184-0.613c0.366-0.191,0.791-0.307,1.215-0.322l8.437-0.365c2.617-0.117,5.03-1.506,6.434-3.715l4.533-7.121 c0.219-0.352,0.526-0.656,0.892-0.891l1.082-0.688l18,39.846C188.702,185.088,186.83,187.865,184.125,187.779z"></path> </svg>
                      </span>
                        <div class="description">
                            Quer se destacar? Faça como os melhores e seja aprovado
                        </div>
                    </div>

                    <div class="item">
                      <span class="ico">
                        <svg klickart-edit-icon="svg" fill="#56aaac" viewbox="0 0 48.827 48.827"
                             enable-background="new 0 0 48.827 48.827"> <path
                                    d="M48.15,6.05l-4.368-4.362c-0.451-0.451-1.044-0.677-1.636-0.677c-0.593,0-1.186,0.225-1.636,0.676l-3.494,3.484 l7.64,7.626l3.494-3.483C49.053,8.412,49.053,6.949,48.15,6.05z"></path> <polygon
                                    points="14.336,27.81 21.976,35.437 43.021,14.431 35.381,6.804 "></polygon> <polygon
                                    points="12.687,29.441 11.056,38.694 20.327,37.067 "></polygon> <path
                                    d="M33.807,42.816H5.001V14.011H25.33l5.01-5H3.234C1.455,9.011,0,10.466,0,12.245v32.338c0,1.778,1.455,3.233,3.234,3.233 h32.339c1.777,0,3.232-1.455,3.232-3.233V21.462l-5,4.992L33.807,42.816L33.807,42.816z"></path> </svg>
                      </span>
                        <div class="description">
                            Elimine as dúvidas e se preocupe apenas em estudar
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="planejamento" style="padding: 0px 0; text-align: center; ">
        <div class="container">
            <h2 style="font-weight: bold; padding-top: 65px; padding-bottom: 50px">
                Você pode escolher entre dois planejamentos, um com 30 horas semanais de estudo e outro com 45 horas
                semanais:
            </h2>

            <ul class=" columns-list clearfix" id="klickart-collection-1djpf8rdp9jg00">
                <li style="background-attachment: scroll; border-radius: 15px">
                    <!--<header class="item-header">-->
                    <!--<div class="opt-ico" klickart-edit-not-highlight="" style="">-->
                    <!--<div class="line" style="background-attachment: scroll;"></div>-->
                    <!--<span class="ico">-->
                    <!--<svg fill="#47c8cc" klickart-edit-icon="svg" viewBox="0 0 51 52.001">-->
                    <!--<path d="M36.7,49.49l-6.148-0.868l-5.2,3.378l-5.161-3.438l-6.158,0.798l-3.152-5.326l-5.896-1.94l-0.518-6.16L0,31.642l2.218-5.773l-2.152-5.798l4.515-4.243L5.17,9.674L11.088,7.8L14.3,2.512l6.148,0.867L25.649,0l5.161,3.437l6.158-0.798l3.152,5.325l5.896,1.941l0.518,6.159L51,20.359l-2.218,5.773l2.152,5.798l-4.515,4.244l-0.589,6.153L39.913,44.2L36.7,49.49z"></path></svg>-->
                    <!--</span>-->
                    <!--<span class="number"><b>30</b></span>-->
                    <!--</div>-->
                    <!--</header>-->
                    <img class="item-image"
                         src="img/thumbnail_large(22).jpg"
                         klickart-image-source="src" style="width: 141px;">
                    <h3 class="item-title"><b class="medium-b">30 horas/semana</b></h3>
                    <div class="item-description">
                        <div>Planejamento mais indicado para quem trabalha e estuda, possuindo uma disponibilidade&nbsp; em
                            torno de 30 horas de estudo por semana. Por exemplo, estudando 5 horas diárias de segunda à
                            sabado.
                        </div>
                    </div>
                </li>
                <li style="background-attachment: scroll; border-radius: 15px">
                    <!--<header class="item-header">-->
                    <!--<div class="opt-ico" klickart-edit-not-highlight="" style="">-->
                    <!--<div class="line" style="background-attachment: scroll;"></div>-->
                    <!--<span class="ico"><svg fill="#47c8cc" klickart-edit-icon="svg" viewBox="0 0 51 52.001"><path-->
                    <!--d="M36.7,49.49l-6.148-0.868l-5.2,3.378l-5.161-3.438l-6.158,0.798l-3.152-5.326l-5.896-1.94l-0.518-6.16L0,31.642l2.218-5.773l-2.152-5.798l4.515-4.243L5.17,9.674L11.088,7.8L14.3,2.512l6.148,0.867L25.649,0l5.161,3.437l6.158-0.798l3.152,5.325l5.896,1.941l0.518,6.159L51,20.359l-2.218,5.773l2.152,5.798l-4.515,4.244l-0.589,6.153L39.913,44.2L36.7,49.49z"></path></svg></span><span-->
                    <!--class="number"><b>45</b></span></div>-->
                    <!--</header>-->
                    <img class="item-image"
                         src="img/thumbnail_large(37).jpg"
                         klickart-image-source="src" style="width: 143px;">
                    <h3 class="item-title"><b class="medium-b">45 horas/semana</b></h3>
                    <div class="item-description">Planejamento mais indicado para quem possui a maior parte do dia
                        disponível para o estudo. Por exemplo, estudando 8 horas diárias de segunda à sexta, mais 5 horas no
                        sábado.
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section style="background-color: #F0F6EA">
        <div class="container">
            <h2 style="text-align: center; font-weight: bold; padding-top: 65px; padding-bottom: 50px"">PLANEJAMENTOS</h2>
            <div class="row">

                <div class="col-sm-4">
                    <ul class="planul">
                        <li>Os dois planejamentos podem ser ajustados conforme sua disponibilidade de horário.</li>
                        <li>Basta escolher o planejamento que mais se aproxima de sua disponibilidade e realizar esses ajustes</li>
                    </ul>
                </div>

                <div class="col-sm-4" style="text-align: center">
                    <img class="item-image" src="img/helicoptero.jpg"
                         klickart-image-source="src" alt="" style="width: 285px;">
                </div>

                <div class="col-sm-4">
                    <ul class="planul" style="">
                        <li>Os dois tipos de planejamento ( 30 e 45 ) possuem o mesmo conteúdo, com as mesmas análises.</li>
                        <li>A única diferença é a divisão de tempo por semana e, consequentemente, um tempo maior ou menor de estudos até sua aprovação.</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <section id="cursos" style="text-align: center; padding-bottom: 20px">
        <h2 style="text-align: center; font-weight: bold; padding-top: 65px; padding-bottom: 50px">CURSOS</h2>

        <div class="card ml-1 mt-sm-2 mt-3" style="width: 20rem; margin: auto; display: inline-block">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal" style="font-size: 21px;">Edital Direcionado<br>AFRFB Básico - CICLO 30H</h4>
            </div>
            <div class="card-body">
                <img src="img/afrfbbasico.jpeg" alt="PDFs do edital direcionado" width="160px">
                <a href="{{route('basico-afrfb')}}" style="margin: 10px auto; color: #fff" class="btn btn-lg btn-block btn-primary">Saiba mais</a>
            </div>
        </div>

        <div class="card ml-1 mt-sm-2 mt-3" style="width: 20rem; margin: auto; display: inline-block">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal" style="font-size: 21px;">Edital Direcionado<br>AFRFB Básico - CICLO 45h</h4>
            </div>
            <div class="card-body">
                <img src="img/afrfbbasico.jpeg" alt="PDFs do edital direcionado" width="160px">
                <a href="{{route('basico-afrfb45')}}" style="margin: 10px auto; color: #fff" class="btn btn-lg btn-block btn-primary">Saiba mais</a>
            </div>
        </div>

        <div class="card ml-1 mt-sm-2 mt-3" style="width: 20rem; margin: auto; display: inline-block;">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal"; style="font-size: 21px;">Edital Direcionado<br>AFRFB Avançado - CICLO 30h</h4>
            </div>
            <div class="card-body">
                <img src="img/afrfb-avançado.png" alt="PDFs do edital direcionado" width="160px">
                <a href="{{route('avancado-afrfb')}}" style="margin: 10px auto; color: #fff" class="btn btn-lg btn-block btn-primary">Saiba mais</a>
            </div>
        </div>

        <div class="card ml-1 mt-sm-2 mt-3" style="width: 20rem; margin: auto; display: inline-block; ">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal" style="font-size: 21px;">Edital Direcionado<br>AFRFB Avançado - CICLO 45h</h4>
            </div>
            <div class="card-body">
                <img src="img/afrfb-avançado.png" alt="PDFs do edital direcionado" width="160px">
                <a href="{{route('avancado-afrfb45')}}" style="margin: 10px auto; color: #fff" class="btn btn-lg btn-block btn-primary">Saiba mais</a>
            </div>
        </div>

    </section>

    <section>
        <div class="container" style="text-align: center; padding: 50px 0">

            <div class="img-content" id="klickart-collection-23efd7pmfrl000">
                <img class="img" src="img/01.png" alt="Formas de Pagamento">
                <img class="img" src="img/02.png" alt="Formas de Pagamento">
                <img class="img" src="img/03.png" alt="Formas de Pagamento">
                <img class="img" src="img/04.png" alt="Formas de Pagamento">
                <img class="img" src="img/05.png" alt="Formas de Pagamento">
                <img class="img" src="img/06.png" alt="Formas de Pagamento">
                <img class="img" src="img/07.png" alt="Formas de Pagamento">
                <img class="img" src="img/08.png" alt="Formas de Pagamento">
                <img class="img" src="img/09.png" alt="Formas de Pagamento">
            </div>
        </div>
    </section>

@endsection
