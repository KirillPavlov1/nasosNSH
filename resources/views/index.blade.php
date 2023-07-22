@extends('layouts.app')

@section('title-page')
Насосы НШ
@endsection
@section('description')
Насосы НШ описание
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