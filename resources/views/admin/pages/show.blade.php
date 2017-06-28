@extends('layouts.admin')
@section('content')
<section class="page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <h1>{{$page->name}}<h1>
        </hr>
      </div>
      <div class="col-xs-12 col-sm-12">
        @if($page)
        <img src="{{$page->img}}" />
        @endif
        <p>{!! $page->description !!}</p>
      </div>
    </div>
  </div>
</section>
@endsection
