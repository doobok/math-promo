@extends('app')

@section('head')
@component('components.meta')

  @slot('title') Репетитор онлайн | Tutor-Math @endslot
  @slot('description') Занятия с репетитором онлайн. Репетиторский образовательный центр Tutor-Math - математика, физика, английский и другие предметы @endslot
  @slot('image') /img/online/index.jpg @endslot
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
@include('layouts.global.thems', ['id' => 'thems'])
@include('layouts.promo-online.extensions', ['id' => 'extensions'])
@include('layouts.promo-online.steps', ['id' => 'steps'])
@include('layouts.global.numbers', ['id' => 'numbers'])
@include('layouts.promo-online.introduce', ['id' => 'introduce'])
@include('layouts.promo-online.prices', ['id' => 'prices'])
@include('layouts.global.specialists', ['id' => 'specialists', 'category' => 'Онлайн репетитор'])

@include('layouts.promo-online.omega')


@endsection
