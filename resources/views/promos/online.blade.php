@extends('app')

@section('head')
@component('components.meta')

  @slot('title') Репетитор онлайн | Tutor-Math @endslot
  @slot('description') Desc @endslot
  @slot('image') /main.jpg @endslot
  @slot('date') @endslot

@endcomponent
@endsection

@section('main')

@include('components.nav', ['menu' => [
          (object) ['slug' => 'vectors', 'title' => 'Направления подготовки'],
          (object) ['slug' => 'steps', 'title' => 'Как начать обучение'],
          (object) ['slug' => 'introduce', 'title' => 'О нас'],
          (object) ['slug' => 'prices', 'title' => 'Цены'],
          (object) ['slug' => 'specialists', 'title' => 'Преподаватели'],
        ]])

@include('layouts.promo-online.alfa')

@include('layouts.promo-online.vectors', ['id' => 'vectors'])
@include('layouts.promo-online.thems', ['id' => 'thems'])
@include('layouts.promo-online.extensions', ['id' => 'extensions'])
@include('layouts.promo-online.steps', ['id' => 'steps'])
@include('layouts.promo-online.numbers', ['id' => 'numbers'])
@include('layouts.promo-online.introduce', ['id' => 'introduce'])
@include('layouts.promo-online.prices', ['id' => 'prices'])
@include('layouts.promo-online.specialists', ['id' => 'specialists'])

@include('layouts.promo-online.omega')


@endsection
