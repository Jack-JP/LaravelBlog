@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header"><h4>edit post</h4></div>
        <div class="card-body">
          <div class="row">
            {!! Form::model($post, ['method' => 'patch', 'route' => ['posts.update', $post->id]]) !!}


            {!! Form::text('name') !!}
            {!! Form::submit('update post') !!}

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
