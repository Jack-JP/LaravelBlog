@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">index page</div>
        <div class="card-body">

          @foreach($posts as $post)
            {{ $post->name }}<br>
          @endforeach



        </div>
      </div>
    </div>
  </div>
</div>
@endsection
