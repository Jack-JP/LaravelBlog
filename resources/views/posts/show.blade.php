@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">Show page</div>
        <div class="card-body">
          {{ $post->name }}
            
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
