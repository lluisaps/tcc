@extends('layout.site')
@section('titulo','Home')
@section('conteudo')

    <section id="content">
        <div id="banner">
            <img src="{{ asset('img/icons/Banner.png') }}" style="width: 1050px; height: 350px;">
        </div>

        <br><br><br>
        
        <div id="informacoes" class="form">
            <div class="texto">
                <p style="color: #2652a9;">O que é?</p>
                <p>O site VerificaAi reconhece documentos com Inteligência Artificial de forma rápida e gratuita, 
                    trazendo o resultado em instantes para você.</p></div>
            <div class="texto">   
                <p style="color: #2652a9;">Como usar?</p>
                <p>Você só precisa ter uma foto boa do documento que deseja usar e acessar a aba "Autentificação",
                    onde irá anexar seu documento e receberá os resultados.</p></div>
        </div>
        <div id="informacoes" class="borda">
                <img src="{{ asset('img/icons/Banner2.png ') }}" style="width: 850px; height: 350px;">
            <div class="final">
                <p>Verificação de documentos com qualidade, rapidez e confiabilidade no nosso site. Acesse agora!</p></div>
        </div>
    </section>

    <br><br><br>
@endsection