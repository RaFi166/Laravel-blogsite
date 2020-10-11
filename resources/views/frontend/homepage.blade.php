@extends('frontend.home_layout')
@section('home_content')
<div class="container">
  
      
 
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($all_posts as $post)
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              {{$post->post_title}}
            </h2>
            <h3 class="post-subtitle">
              
            </h3>
          </a>
          <p class="post-meta">Posted by
          <a href="{{route('home')}}">Start Bootstrap</a>
            {{$post->created_at}}</p>
        </div>
        @endforeach
        <hr>
       
        
       
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>
    
@endsection