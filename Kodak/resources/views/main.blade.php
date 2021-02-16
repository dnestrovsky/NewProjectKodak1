@extends('layouts.app')


@section('title-block', 'Kodak - Главная страница')
@section('title-page', 'Главная')

@section('content')
<div class="row">
  <div class="col-12 mb-5">
    @include("inc.slide")
</div>
<div class="col-12">
  @include("inc.lnews")
</div>
</div>
@endsection
