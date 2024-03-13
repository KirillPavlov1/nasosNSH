@extends('layouts.app')

@section('title-page')
Каталог
@endsection
@section('description')
На этой странице представлены насосы нш 10, 14, 16, 32, 50, 100
@endsection

@section('content')
<main class="mainMain">
    <div class="container">
        <div class="aboutCompany">
            <img src="images/linesCompany.svg">
            <h3 class="h3Company">Каталог</h3>
        </div>
    </div>
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