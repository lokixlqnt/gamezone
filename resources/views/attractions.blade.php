@extends('layouts.app')

@section('title', 'Attractions')

@push('styles')
<link rel="stylesheet" href="{{ url ('css/attractions.css')}}">
@endpush

@section('content')

@include('layouts.nav')

<main>
    <div class="message">
        Sorry, your browser does not support CSS Grid. 😅
    </div>

    <div class="head_text animated fadeInDown">
        <p>Découvrez nos attractions et cumulez vos points grâce à notre système d'xp<p>
    </div>
    
    <section class="section">

        <div class="grid">
                @foreach($attractions as $attraction)
            <!-- img 1 -->

            <div class="{{ $attraction->classdiv}} ">

                <img class="item__image" src="{{ $attraction->logo }}">

                <div class="txt">

                    <p>
                        <span class="bold">{{ $attraction->name }}</span><br />
                        {{ $attraction->experience }} XP / partie  <br />
                        {{ $attraction->minheight }} <br />
                    </p>

                    <a href="{{ route('attraction', ['id' =>$attraction->id])}}">EN SAVOIR +</a>
                </div>
            </div>

            @endforeach

            {{-- <!-- img 2 -->
            <div class="item item--large animated zoomIn">
                <img class="item__image" src="{{ $attraction->logo }}">
                <div class="txt">
                    <p>
                        <span class="bold">{{ $attraction->name }}</span><br />
                        {{ $attraction->experience }} XP / partie <br />
                        {{ $attraction->minheight }} <br />
                    </p>
                    <a href="{{ route('attraction', ['id' =>$attraction->id])}}"">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 3 -->
            <div class="item item--long animated zoomIn">
                <img class="item__image" src="{{ $attraction->logo }}">
                <div class="txt">
                    <p>
                        <span class="bold">{{ $attraction->name }}</span><br />
                        {{ $attraction->experience }} XP / partie <br />
                        {{ $attraction->minheight }} <br />
                    </p>
                    <a href="{{ route('attraction', ['id' =>$attraction->id])}}"">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 4 -->
            <div class="item item--medium animated zoomIn">
                <img class="item__image" src="{{ $attraction->logo }}">
                <div class="txt">
                    <p>
                        <span class="bold">{{ $attraction->name }}</span><br />
                        {{ $attraction->experience }} XP / partie <br />
                        {{ $attraction->minheight }} <br />
                    </p>
                    <a href="{{ route('attraction', ['id' =>$attraction->id])}}">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 5 -->
            <div class="item item--medium animated zoomIn">
                <img class="item__image" src="{{ $attraction->logo }}">
                <div class="txt">
                    <p>
                        <span class="bold">{{ $attraction->name }}</span><br />
                        {{ $attraction->experience }} XP / partie <br />
                        {{ $attraction->minheight }} <br />
                    </p>
                    <a href="{{ route('attraction', ['id' =>$attraction->id])}}">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 6 -->
            <div class="item item--long animated zoomIn">
                <img class="item__image" src="{{ $attraction->logo }}">
                <div class="txt">
                    <p>
                        <span class="bold">{{ $attraction->name }}</span><br />
                        {{ $attraction->experience }} XP / partie <br />
                        {{ $attraction->minheight }} <br />
                    </p>
                    <a href="{{ route('attraction', ['id' =>$attraction->id])}}">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 7 -->
            <div class="item item--medium animated zoomIn">
                <img class="item__image" src="{{ $attraction->logo }}">
                <div class="txt">
                    <p>
                        <span class="bold">{{ $attraction->name }}</span><br />
                        {{ $attraction->experience }} XP / partie <br />
                        {{ $attraction->minheight }} <br />
                    </p>
                    <a href="{{ route('attraction', ['id' =>$attraction->id])}}">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 8     -->
            <div class="item item--medium animated zoomIn">
                <img class="item__image" src="{{ $attraction->logo }}">
                <div class="txt">
                    <p>
                        <span class="bold">{{ $attraction->name }}</span><br />
                        {{ $attraction->experience }} XP / partie  <br />
                        {{ $attraction->minheight }} <br />
                    </p>
                    <a href="{{ route('attraction', ['id' =>$attraction->id])}}">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 9 -->
            <div class="item item--medium animated zoomIn">
                <img class="item__image" src="{{ $attraction->logo }}">
                <div class="txt">
                    <p>
                        <span class="bold">{{ $attraction->name }} </span><br />
                        {{ $attraction->experience }} XP / partie  <br />
                        {{ $attraction->minheight }} <br />
                    </p>
                    <a href="{{ route('attraction', ['id' =>$attraction->id])}}">EN SAVOIR +</a>
                </div>
            </div>


        </div> --}}

</main>
@endsection
