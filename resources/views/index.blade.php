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
       <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper img__bg">
                <!-- Slides -->
                    <div class="swiper-slide img__bg">
                        <div class="nameAndDescription">
                            <h3 class="h3Index">Насосы<br>шестеренные</h3>
                            <div class="descriptionLines">
                                <img src="images/lines.svg">
                                <h4>гидравлические насосы НШ для различной<br>спецтехники высокого качества </h4>
                            </div>
                        </div>
                        <img src="images/pumps.svg" class="img__pumps">
                    </div>
                    <div class="swiper-slide img__bg">
                        {{-- <div class="nameAndDescription">
                            <h3 class="h3Index">Насосы<br>шестеренные</h3>
                            <div class="descriptionLines">
                                <img src="images/lines.svg">
                                <h4>гидравлические насосы НШ для различной<br>спецтехники высокого качества </h4>
                            </div>
                        </div> --}}
                        <img src="images/pic3.jpeg" class="img__slider">
                    </div>
                    
                    
                    <div class="swiper-slide img__bg">
                        <img src="images/pic4.jpg" class="img__slider">
                    </div>
                    <div class="swiper-slide img__bg">
                        <img src="images/pic5.jpg" class="img__slider">
                    </div>
                    <div class="swiper-slide img__bg">
                        <img src="images/pic6.jpg" class="img__slider">
                    </div>
                    <div class="swiper-slide img__bg">
                        <img src="images/pic7.jpg" class="img__slider">
                    </div>
                    <div class="swiper-slide img__bg">
                        <img src="images/pic8.jpg" class="img__slider">
                    </div>
                    <div class="swiper-slide img__bg">
                        <img src="images/pic1.jpeg" class="img__slider">
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
    </section>
    <section id="videoWithTextOnMainPage">
        <div class="container">
            <div class="videoWithText">
                <p class=textToVideo>
                    Видео производства:
                </p>
                <iframe class="videoMain" width="60%" height="315" src="https://www.youtube.com/embed/7l3bCo0k0Es?si=BNfwnenGAlz_5NCJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section id="imagesWithText">
        <div class="container">
            <div class="imgText">
                <p class="imgTextTEXT1">
                    Глубокий взгляд внутрь нашего насоса — идеальное сочетание инженерного мастерства и надежности
                </p>
                <img src="images/nsh-01.svg" class="imgTextIMG">
            </div>
            <div class="imgText">
                <img src="images/nsh-02.svg" class="imgTextIMG">
                <p class="imgTextTEXT2">
                    Технология, обеспечивающая бесперебойную подачу масла для надежной работы наших насосов
                </p>
            </div>
            <div class="imgText">
                <p class="imgTextTEXT1">
                    Гарантия эффективной работы вашей техники
                </p>
                <img src="images/nsh-03.svg" class="imgTextIMG">
            </div>
            <div class="imgText">
                <img src="images/nsh-04.svg" class="imgTextIMG">
                <p class="imgTextTEXT2">
                    Мощность, надежность, эффективность – наши насосы соответствуют самым высоким стандартам качества
                </p>
            </div>
            <div class="imgText">
                <p class="imgTextTEXT1">
                    Наши насосы проходят строгие испытания на специальном оборудовании – гарантия безопасности и долговечности вашего оборудования
                </p>
                <img src="images/nsh-06.svg" class="imgTextIMG">
            </div>
        </div>
    </section>
</main>
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    autoplay: {
        delay: 3000,
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
</script>
@endsection