@stack('css')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('../css/app.css') }}">
        <link rel="stylesheet" href="{{ url('../css/fonts.css') }}">
        <title>@yield('title-page')</title>
        <meta name="description" content="@yield('description')">
        <script src="../js/myScripts.js"></script>
        <link rel="icon" href="https://nasos-nsh.ru/favicon.ico" type="image/x-icon">
                <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(94445929, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
        });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/94445929" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        {{-- {!! htmlScriptTagJsApi(["lang" => "ru"]) !!} --}}
        {!! htmlScriptTagJsApi() !!}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        
    </head>
    <body>
        @include('includes.header')
        @include('layouts.applic')
        @yield('content')
        @include('includes.footer')
    </body>
</html>