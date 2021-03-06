<link rel="stylesheet" href="{{ asset('css/search.css')}}">
@extends('main.main')
@section('title')
Поиск
@endsection
@section('main-block')
<div class=" search-1">
    <div class="col-md-2 col-12">
        <h1>Поиск</h1>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <input type="text" class="se-0" placeholder="Введите имя работы...">
    </div>

</div>
<div class="row">
    {{-- buttons --}}
    <div class="col-md-6 ">
        <div class="row">
            {{-- row-1 --}}
            <div class="col-lg-4 col-md-6 col-sm-6">
                <button class=" se-1 b gr">
                    Завершен
                </button>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-6">
                <button class=" se-1 b or">
                    В процессе
                </button>
            </div>
            {{-- row-2 --}}
            <div class="col-lg-3 col-md-6 col-xs-6"><button class="se-2 b se-2-gr">Боевик</button></div>
            <div class="col-lg-3 col-md-6 col-xs-6"><button class=" se-2 b se-2-g">Детекив</button></div>
            <div class="col-lg-3 col-md-6 col-xs-6"><button class="se-2 b se-2-b">Драма</button></div>
            <div class="col-lg-3 col-md-6 col-xs-6"><button class=" se-2 b se-2-s">Приключения</button></div>
            {{-- row-3 --}}
            <div class="col-lg-3 col-md-6 col-xs-6"><button class=" se-2 b se-2-p">Романтика</button></div>
            <div class="col-lg-3 col-md-6 col-xs-6"><button class=" se-2 b se-2-r">Ужасы</button></div>
            <div class="col-lg-3 col-md-6 col-xs-6"><button class=" se-2 b se-2-ph">Фэнтэзи</button></div>
            <div class="col-lg-3 col-md-6 col-xs-6"><button class=" se-2 b se-2-y">Юмор</button></div>
            {{-- row-4 --}}
            <div class="col-lg-6 col-md-12"><button class="se-3 b se-2-g">Сначала более популярные</button></div>
            <div class="col-lg-6 col-md-12"><button class="se-3 b se-2-g">Сначала менее популярные</button></div>
            {{-- row-5 --}}
            <div class="col-md-5">
                <div class="se-4 b se-4-d"><input type="date" placeholder="Дата от &darr;" class="date-in" name="" id=""
                        onfocus="(this.type='date')"></div>
            </div>
            <div class="col-md-5">
                <div class="se-4 b se-4-d"><input type="date" class="date-in" name="" id=""
                        onfocus="(this.type='date')"></div>
            </div>

            <div class="col-12"><button class="searc">Найти!</button></div>
        </div>
    </div>
    {{-- img --}}
    <div class="col-md-6 col-12">
        <img src="{{ asset('img/lup.png') }}" class="img-fluid" width="600px" alt="">
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        <h3>Результаты поиска</h3>
    </div>
</div>
@endsection
