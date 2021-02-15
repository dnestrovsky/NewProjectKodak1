@extends('layouts.app')


@section('title-block', 'Main')
@section('title-page', 'Главная')

@section('content')
<div class="row">
  <div class="col-12 mb-5">
    @include("inc.slide")
</div>
<div class="col-12">
  @include("inc.lnews")
    @include("inc.lnews")
</div>
</div>
@endsection
