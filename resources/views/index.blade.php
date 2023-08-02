@extends('layouts.app')

@section('title-page')
Насосы шестеренные НШ МЛМЗ
@endsection
@section('description')
Добро пожаловать на сайт МЛМЗ (Магнитогорский Литейно Механический Завод). Наша компания занимается производством шестерернных насосов. 
Мы производим нш32А-3-Л, нш-10У-3-Л, нш-14М-3-Л, нш50Д-3, нш50Д-3-Л, нш32Д-3, нш32Д-3-Л, нш32А-3, нш16М-3-Л, нш-10У-3
@endsection

@section('content')
<main class="mainMain">
    <section class="section__banner">
        <div class="imgBg__wrapper">
            <div class="img__bg">
                <div class="container">
                    <div class="banner__wrapper">
                        <div class="nameAndDescription">
                            <h3 class="h3Index">Насосы<br>шестеренные</h3>
                            <div class="descriptionLines">
                                <img src="images/lines.svg">
                                <h4>гидравлические насосы НШ для различной<br>спецтехники выского качества </h4>
                            </div>
                        </div>
                        <img src="images/pumps.svg" class="img__pumps">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="listProducts">
        <div class="container">
            <div class="product__wrapper">
                @foreach($pumps as $pump)   
                    @include('includes.productBlock')
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection