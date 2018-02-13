@extends('layouts.app')

@section('content')
<div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">{{ $post->name }}</h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">{{ $post->user->name }}</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on {{ $post->created_at }}</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="https://www.caracolinternacional.com/sites/default/files/webpage_imagendeltitulo_750x300_la_nocturna_ing.png" alt="">

          <hr>

          <!-- Post Content -->
          <p class="lead">{{ $post->body }}</p>


          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          @if($post->commentsActive)
          <div class="media mb-4">
            <img height="80" width="80" class="d-flex mr-3 rounded-circle" src="http://www.nce.ufrj.br/ginape/imagens/avatar.png" alt="user">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
            </div>
          </div>
          @else
          <div class="media mb-4">
            <h4 class="text-center">No comments yet. This could be your lucky day.</h4>
          </div>
          @endif
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">Freebies</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets.
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
@endsection
