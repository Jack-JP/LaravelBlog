@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header"><h4>Create post</h4></div>
        <div class="card-body">
          {!! Form::open(['method' => 'post', 'route' => 'posts.store']) !!}

          <div class="form-group">
          {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
          {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
          </div>
          <div class="form-group">
          {!! Form::label('body', 'Body:', ['class' => 'control-label']) !!}
          {!! Form::text('body', null, ['class' => 'form-control', 'placeholder' => 'Body']) !!}
          </div>
          <div class="form-group">
          {!! Form::label('active', 'Active:', ['class' => 'control-label']) !!}
          {!! Form::select('active', ['1' => 'Show', '0' => 'Hide'], null, ['class' => 'form-control', 'placeholder' => 'Show or hiding']) !!}
          </div>
          <div class="form-group">
          {!! Form::label('comments', 'Comments:', ['class' => 'control-label']) !!}
          {!! Form::select('comments', ['1' => 'On', '0' => 'Off'], null, ['class' => 'form-control', 'placeholder' => 'Comments On/Off']) !!}
          </div>
          {!! Form::submit('add post', ['class' => 'btn btn-info']) !!}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
