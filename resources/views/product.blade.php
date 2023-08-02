@extends('layouts.app')

@section('title-page')
{{$pump->title}}
@endsection
@section('description')
{{$pump->dsc}}
@endsection

@section('content')
<main class="mainProduct" name="{{$pump->temp}}">
    <div class="container">
        <div class="nameProduct">
            <img src="../images/linesCompany.svg">
            <h3 class="h3Product">{{$pump->name}}</h3>
        </div>
        <div class="productBox">
            <div class="containerBlockProduct">
                <div class="firstFieldProduct">
                    <div class="productImageProduct">
                        <img src="{{$pump->src}}" class="imageProductProductInside">
                    </div>
                    <div class="nameDescImageProduct">
                        <div class="nameDescProductProduct">
                            <p class="useProductProduct">
                                Применение
                            </p>
                            <p class="descProductProduct">
                                {{$pump->use}}
                            </p>
                        </div>
                        <div class="imagesOfProductProduct">
                            <img src="../images/arrow-left.svg" onclick="switchImagePageBack(this)" class="arrowsProduct">
                            <div class="productImageProduct2" onclick="switchImagePage(this, 0)">
                                <img src="{{$pump->src}}" class="productImageProduct2inside0">
                            </div>
                            <div class="productImageProduct2" onclick="switchImagePage(this, 1)">
                                <img src="../images/{{$pump->temp}}_1.png" class="productImageProduct2inside1">
                            </div>
                            <div class="productImageProduct2" onclick="switchImagePage(this, 2)">
                                <img src="../images/{{$pump->temp}}_2.png" class="productImageProduct2inside2">
                            </div>
                            <div class="productImageProduct2" onclick="switchImagePage(this, 3)">
                                <img src="../images/{{$pump->temp}}_3.png" class="productImageProduct2inside3">
                            </div>
                            <img src="../images/arrow-right.svg" onclick="switchImagePageForward(this)" class="arrowsProduct">
                        </div>
                    </div>
                </div>
                <div class="secondFieldProduct">
                    <div class="charactNameProduct">
                        <p class="characteristicProduct">
                            Характеристика
                        </p>
                        <img src="../images/lineProduct.svg" class="lineProduct">
                    </div>
                    <p class="characteristicTextProduct">
                        {{$pump->characteristic}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection