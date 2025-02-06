@extends('frontend.layouts.master')

@section('content')
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="blog-section-title text-center">
                    <h2>{{ $category->name }}</h2> <!-- Display the category name -->
                    <p>View the latest news on {{ $category->name }}</p>
                </div>

                @foreach ($posts as $post) <!-- Loop through posts related to the category -->
                <article class="blog-post">
                    <div class="blog-post-thumb">
                        <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 300px; background-color: {{ $post->image }};" alt="blog-thum"> <span class="text-uppercase font-weight-bold text-white" style="font-size: 3rem;">Image</span></div>
                    </div>
                    <div class="blog-post-content">
                        <div class="blog-post-title">
                            <a href="{{ route('single-blog', ['slug' => $post->slug]) }}">{{ $post->title }}</a> <!-- Display post title -->
                        </div>
                        <div class="blog-post-meta">
                            <ul>
                                <li>By <a href="{{ route('about') }}">{{ $post->user->name }}</a></li> <!-- Post author -->
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }} <!-- Post date -->
                                </li>
                            </ul>
                        </div>
                        <p>{{ Str::limit($post->body, 150) }}</p> <!-- Display a snippet of the post content -->
                        <a href="{{ route('single-blog', ['slug' => $post->slug]) }}" class="blog-post-action">read more <i class="fa fa-angle-right"></i></a>
                    </div>
                </article>
                @endforeach

                <!-- Pagination (only display if there are posts) -->
                @if ($posts->hasPages()) <!-- Check if pagination is required -->
                <div class="blog-post-pagination">
                    <nav aria-label="Page navigation example" class="nav-bg">
                        <ul class="pagination">
                            <!-- Previous Button -->
                            <li class="page-item {{ $posts->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $posts->previousPageUrl() }}">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                
                            <!-- Page Numbers -->
                            @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $posts->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach
                
                            <!-- Next Button -->
                            <li class="page-item {{ $posts->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $posts->nextPageUrl() }}">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
