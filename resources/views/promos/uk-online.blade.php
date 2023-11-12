@extends('app')

@section('head')
    @component('components.meta')

        @slot('title') Репетитор онлайн | Tutor-Math @endslot
        @slot('description') Заняття з репетитором онлайн. Репетиторський освітній центр Tutor-Math - математика, фізика, англійська та інші предмети @endslot
        @slot('image') /img/online/index.jpg @endslot
        @slot('date') @endslot

    @endcomponent
@endsection

@section('main')

    @include('components.nav', ['menu' => [
              (object) ['slug' => 'vectors', 'title' => 'Напрями підготовки'],
              (object) ['slug' => 'steps', 'title' => 'Як розпочати навчання'],
              (object) ['slug' => 'introduce', 'title' => 'Про нас'],
              (object) ['slug' => 'specialists', 'title' => 'Вчителі'],
            ]])

    @include('layouts.promo-online.alfa')

    @include('layouts.promo-online.vectors', ['id' => 'vectors'])
    @include('layouts.global.thems', ['id' => 'thems'])
    @include('layouts.promo-online.extensions', ['id' => 'extensions'])
    @include('layouts.promo-online.steps', ['id' => 'steps'])
    @include('layouts.global.numbers', ['id' => 'numbers'])
    @include('layouts.promo-online.introduce', ['id' => 'introduce'])
    {{--@include('layouts.promo-online.prices', ['id' => 'prices'])--}}
    @include('layouts.global.specialists', ['id' => 'specialists', 'category' => 'Онлайн репетитор'])

    @include('layouts.promo-online.omega')


@endsection
