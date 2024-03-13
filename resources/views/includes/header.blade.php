<header>
    {{-- <div class="container"> --}}
        <div class="header__wrapper">
            <div class="logo__name">
                <div class="logo">
                    <img class="borders__logo" src="/images/logo.svg">
                </div>
                <div class="name">
                    <h1>МЛМЗ</h1>
                    <h2>Магнитогорский Литейно<br>Механический Завод</h2>
                </div>
            </div>
            <div class="header__buttons">
                <p class="emailHeader">mgn-litz@mail.ru</p>
                <a href="{{route('main')}}" class="header__buttons1">Главная</a>
                <a href="{{route('catalog')}}" class="header__buttons1">Каталог</a>
                <a href="{{route('company')}}" class="header__buttons1">О компании</a>
                <a href="{{route('buyer')}}" class="header__buttons1">Покупателю</a>
                <a href="{{route('guarantee')}}" class="header__buttons1">Гарантия</a>
                <div class="header__buttons2" onclick="openForm()">Связаться с нами</div>
            </div>
        </div>
    {{-- </div> --}}
</header>