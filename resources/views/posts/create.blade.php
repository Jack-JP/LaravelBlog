@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header"><h4>Create post</h4></div>
        <div class="card-body">
          {!! Form::open(['method' => 'post', 'route' => 'posts.store']) !!}
          {!! Form::text('name', null) !!}
          {!! Form::submit('add post') !!}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
