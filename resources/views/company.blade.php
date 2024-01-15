@extends('layouts.app')

@section('title-page')
О компании
@endsection
@section('description')
Наша компания занимается производством шестерернных насосов. 
Мы производим нш32А-3-Л, нш-10У-3-Л, нш-14М-3-Л, нш50Д-3, нш50Д-3-Л, нш32Д-3, нш32Д-3-Л, нш32А-3, нш16М-3-Л, нш-10У-3.
МЛМЗ. Новый завод в Магнитогорске. Производство шестеренных насосов.
@endsection

@section('content')
<main class="mainCompany">
    <div class="container">
    <div class="aboutCompany">
        <img src="images/linesCompany.svg">
        <h3 class="h3Company">О компании</h3>
    </div>
    </div>
    <section class="partCompany1">
        <div class="div_banner1Company">
            <img src="images/banner1Company.png" class="banner1Company">
        </div>
        <p class="textCompany">
            Мы с гордостью представляем нашу компанию Магнитогорский Литейно-Механический Завод (МЛМЗ)
            который является новым заводом по производству шестеренных насосов. Расположенный в 
            Магнитогорске, мы стремимся стать ведущим производителем
            высококачественных насосов в отрасли.
            Наш завод МЛМЗ оснащен передовым оборудованием и технологиями, позволяющими нам
            гарантировать безупречное качество нашей продукции. Мы придаем большое значение
            каждой стадии производства, начиная от выбора материалов высочайшего качества
            и заканчивая строгими контрольными мероприятиями.
            Несмотря на то, что МЛМЗ начал производство насосов недавно, наша команда состоит
            из высококвалифицированных специалистов, обладающих богатым опытом в области
            производства и гидравлики. Мы уверены в своей способности предложить клиентам
            надежные и эффективные решения для их гидравлических потребностей.
        </p>
    </section>
    <div class="container">
        <section class="partCompany2">
            
                <p class="textCompany">
                    В МЛМЗ мы стремимся не только производить высококачественные насосы,
                    но и установить долгосрочные партнерские отношения с нашими клиентами. Мы готовы
                    предложить индивидуальные решения, адаптированные под конкретные потребности каждого
                    клиента.<br>
                    Будучи молодым и энергичным игроком на рынке, МЛМЗ стремится стать лидером в отрасли
                    производства насосов. Мы искренне верим, что наша преданность качеству, инновациям
                    и клиентоориентированному подходу поможет нам достичь этой цели. МЛМЗ готов стать
                    вашим надежным партнером в области гидравлики и насосных решений.
                </p>
                <div class="album">
                    <div class="firstLine">
                        <img src="images/banner2Company.png" class="banner2Company">
                        <img src="images/banner3Company.png" class="banner3Company">
                    </div>
                    <div class="secondLine">
                        <img src="images/banner4Company.png" class="banner4Company">
                    </div>
                </div>
        </section>
        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/jUdUilFptLw?si=pFprJG2cktLYAlyV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</main>
@endsection