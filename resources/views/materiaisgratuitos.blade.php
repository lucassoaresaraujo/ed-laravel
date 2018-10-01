@extends('layouts.default')

@section('menu-principal')
    @include('layouts.partials.menuprincipal')
@endsection

@section('content')

    <div class="container">
        <h2 style="font-family: 'Open Sans', sans-serif; text-align: center; font-weight: bold">Materiais Gratuitos</h2>
        <p style="font-family: 'Open Sans', sans-serif; text-align: center">Confira os materiais gratis do Edital Direcionado</p>
        <div id="sobre" class="row" style="margin-top: 40px;">
            <div class="col-md-12">
                <h3 style="text-align: left; text-transform: uppercase; font-size: 23px;">Edital Estruturado - Técnico SEFAZ RS</h3>
                <p>Com o objetivo de auxiliar os estudantes na preparação do seu planejamento de estudos para o concurso de Técnico da SEFAZ/RS, elaboramos uma planilha de estruturação do edital, por meio da divisão do conteúdo programático das disciplinas por tópicos e subtópicos, contendo ainda os seguintes dados para preenchimento:</p>
                <ul style="margin-top: 25px; font-family: 'Open Sans', sans-serif; font-size: 16px; padding-left: 25px">
                    <li><strong>Dia do mês</strong> – Assim você poderá programar em qual dia estudará determinada disciplina e item do edital</li>
                    <li><strong>Material</strong> – Aqui você preencherá os materiais a serem utilizados no estudo de determinada disciplina</li>
                    <li><strong>Teoria</strong> – Nesse campo você irá preencher, caso haja necessidade, a teoria de determinado conteúdo</li>
                    <li><strong>Revisões</strong> – Dessa forma ficará fácil planejar quando realizar as revisões de determinado assunto</li>
                    <li><strong>Exercícios</strong> – A fim de controlar a quantidade de exercícios resolvidos e o seu percentual de aproveitamento.</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <form action="https://editaldirecionado.us18.list-manage.com/subscribe/post?u=a927a9f89172e3a47834cc8a7&amp;id=920b420bf2"
                  method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="col-sm-12 col-md-7"
                  target="_blank">
                <input type="email" value="" name="EMAIL" placeholder="Digite seu e-mail" required id="mce-EMAIL">

                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_a927a9f89172e3a47834cc8a7_920b420bf2" tabindex="-1" value="">
                </div>

                <input type="submit" class="mt-1 mb-4 col-sm-12 btn btn-primary btn-lg"
                       value="Realizar Download Edital Estruturado Tec/Sefaz-RS"/>
            </form>
        </div>
    </div>



@endsection
