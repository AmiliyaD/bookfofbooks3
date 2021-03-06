
<link rel="stylesheet" href="{{ asset('css/new2.css') }}">
<link rel="stylesheet" href="{{ asset('css/tags.css') }}">
@extends('main.main')

@section('title')
Главная
@endsection

@section('main-block')
<div class="bg3"></div>
<div class="bg">
    {{-- header --}}
    <div class="row bg2">
        <div class="col-lg-6 col-md-12 col-12">
            <h1 class="f">Подари свой мир!</h1>
            <p class="hp">и может, он кому-то понравится</p>

            <a href='{{ route('add')}}'> <button class="sds"> Добавить работу</button></a>
        </div>

    </div>
    {{-- stories --}}
    <div class="row">
        <h2 class="b">Новинки</h2>
        <div class="w-100"></div>
        @foreach ($get as $g)
        <div class="col-md-12  first-bor">
            <div class="row first-stories">
    
                <div class="col-md-6 offset-1">
                <h2 class="works-h2"><a href="{{ route('workText', ['id'=>$g->id]) }}">{{ $g->title }}</a></h2>
    
                </div>
                
                <div class="col-md-1 offset-xs-1">
                    <img src="{{ asset('img/ы.png') }}" alt="">
                <span>{{ $g->likes }}</span>
                </div>
                <div class="col-md-1  offset-xs-1">
                    <img src="{{ asset('img/i2.png') }}" alt="">
                    <span>123</span>
                </div>
                <div class="col-md-3">
                <p id="{{$g->genre}}" class='work-genre work-detective text-center {{ $g->genre }}'>{{ $g->genre }}</p>
                  
                </div>
    
                <div class="col-2 offset-1">
                    <p class="work-autor">{{ $g->autor }}</p>
                </div>
                <div class="col-3 offset-1">
                    <p class="work-date">{{ $g->created}}</p>
                </div>
                <div class="col-4 work-process text-right">
                <p>{{$g->status }}</p>
                </div>
                {{-- вторая строка --}}
                <div class="col-md-10 offset-1">
                    <p>{{ $g->text }}</p>
                </div>
            </div>
    
        </div>
        @endforeach

    </div>


    {{-- feat --}}
    <div class="features">
        <div class="row">

            <div class="col-md-4 first-features col-12 text-center">
                <img src="{{ asset('img/47.png') }}" alt="">
                <p>Публикуй свои работы</p>
            </div>
            <div class="col-md-4 col-12 text-center first-features">
                <img src="{{ asset('img/46.png') }}" alt="">
                <p>Читай работы других
                    авторов</p>
            </div>
            <div class="col-md-4 col-12 text-center first-features">
                <img src="{{ asset('img/48.png') }}" alt="">
                <p>Поддерживай авторов и
                    оставляй комментарии</p>
            </div>
        </div>
    </div>
    {{-- button --}}
    <div class="row bit">
        <div class="col-md-4 text-center offset-md-4">
         <a href="{{ route('allWorks') }}"> <button class="sds">Перейти ко всем работам</button></a>  
        </div>
    </div>


</div>




@endsection
