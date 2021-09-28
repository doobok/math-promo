@extends('app')

@section('head')
@component('components.meta')

  @slot('title') Title @endslot
  @slot('description') Desc @endslot
  @slot('image') /main.jpg @endslot
  @slot('date') @endslot

@endcomponent
@endsection

@section('main')

{{-- @include('layouts.partials.nav') --}}

@include('layouts.promo-online.alfa')

@include('layouts.promo-online.vectors')
@include('layouts.promo-online.thems')
@include('layouts.promo-online.extensions')
@include('layouts.promo-online.steps')
@include('layouts.promo-online.numbers')
@include('layouts.promo-online.introduce')
@include('layouts.promo-online.prices')
@include('layouts.promo-online.specialists')
@include('layouts.promo-online.about-us')

@include('layouts.promo-online.omega')


@endsection
