@extends('layouts.admin')
@section('content')
<section class="page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>New Page</h1>
        <hr/>
      </div>
      <div class="col-xs-12 col-sm-9">

        {!! Form::open(['action' => 'PageController@store','files' => true]) !!}

        <div class="col-xs-12 col-sm-12">
          {!! Form::label('name', 'Name') !!}
          {!! Form::text('name') !!}
        </div>
        <div class="col-xs-12 col-sm-12">
          {!! Form::label('slug', 'Slug') !!}
          {!! Form::text('slug') !!}
        </div>
        <div class="col-xs-12 col-sm-12">
          {!! Form::label('image', 'Image') !!}
          {!! Form::file('image') !!}
        </div>
        <div class="col-xs-12 col-sm-12">
          {!! Form::label('description', 'Description') !!}
          {!! Form::textarea('description',null,['class'=>'textarea']) !!}
        </div>
        <div class="col-xs-12 col-sm-6">
          {!! Form::submit('Save Page', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>
@endsection
