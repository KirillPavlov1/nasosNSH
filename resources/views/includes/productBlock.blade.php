<div class="productBlock" name= "{{$pump->temp}}">   
    <div class="containerBlock">
        <div class="firstField">
            <div id="productImage" class="imagesProduct">
                <img src= "{{$pump->src}}" class="productImageInside"  >
            </div>
            <div class="nameDescProduct">
                <a href="{{route('product', ['name' => $pump->translation])}}" class="productLink">
                    <p class="nameProduct">
                        {{$pump->name}}
                    </p>
                </a>  
                <p class="useProduct">
                    Применение
                </p>
                <p class="priceProduct">
                    Цена: {{$pump->price}} руб. /шт
                </p>
                <p class="descProduct">
                    {{$pump->use}}
                </p>
                <div id="imagesOfProduct">
                    <img src="images/arrowBack.svg" onclick="switchImageBack(this)" class="arrows">
                    <div id="productImage2" class="imagesProduct" onclick="switchImage(this, 0)">
                        <img src="{{$pump->src}}" class="smallImage0">
                    </div>
                    <div id="productImage2" class="imagesProduct" onclick="switchImage(this, 1)">
                        <img src="images/{{$pump->temp}}_1.png" class="smallImage1">
                    </div>
                    <div id="productImage2" class="imagesProduct" onclick="switchImage(this, 2)">
                        <img src="images/{{$pump->temp}}_2.png" class="smallImage2">
                    </div>
                    <div id="productImage2" class="imagesProduct" onclick="switchImage(this, 3)">
                        <img src="images/{{$pump->temp}}_3.png" class="smallImage3">
                    </div>
                    <img src="images/arrowForward.svg" onclick="switchImageForward(this)" class="arrows">
                </div>
            </div>
        </div>
        <div class="secondField">
            <div class="charactName">
                <p class="characteristic">
                    Характеристика
                </p>
                <img src="images/line.svg">
            </div>
            <p class="characteristicText">
                {{$pump->characteristic}}
            </p>
        </div>
    </div>  
</div>