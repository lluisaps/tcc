<html>
    <head>
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/styless.css') }}" type="text/css">
        
        <!--Let browser know website is optimized for mobile-->
    </head>
    <body>
        @include('layout._cabecalho')
        
        @yield('conteudo')

        @include('layout._rodape')
    </body>
</html>