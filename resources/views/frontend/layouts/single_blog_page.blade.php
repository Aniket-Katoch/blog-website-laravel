@extends('frontend.layouts.master')


@section('content')
<section class="blog-single">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 order-2 order-lg-1">
          <div class="share-now">
            <a href="#" class="scrol">Share</a>
            <div class="sociel-icon">
              <ul>
                <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-10 order-1 order-lg-2">
          <article class="single-blog">
            <a href="{{route('category', ['id' => $post->category_id])}}" class="tag text-uppercase">{{$post->category->name}}</a>
            <p class="title">{{$post->title}}</p>
            <ul class="meta">
              <li>By <a href="{{ route('about') }}">{{$post->user->name}}</a></li>
              <li>
                <i class="fa fa-clock-o"></i>
                {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
              </li>
            </ul>
            <div class="d-flex justify-content-center align-items-center mb-3" style="width: 100%; height: 300px; background-color: {{ $post->image }};" alt="blog-thum"> <span class="text-uppercase font-weight-bold text-white" style="font-size: 3rem;">Image</span></div>
  
            <p>
                {{$post->body}}
            </p>
        </div>
      </div>
    </div>
  </section>
@endsection