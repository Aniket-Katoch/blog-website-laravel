<section class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="blog-section-title">
            <h2>Articles</h2>
            <p>View the latest news on Blogger</p>
          </div>
          @foreach ($posts as $post)
          <article class="blog-post">
            <div class="blog-post-thumb">
              <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 300px; background-color: {{ $post->image }};" alt="blog-thum"> <span class="text-uppercase font-weight-bold text-white" style="font-size: 3rem;">Image</span></div>
            </div>
            <div class="blog-post-content">
              <div class="blog-post-tag">
                <a href="{{route('category', ['slug' => $post->category->slug])}}" class="text-uppercase"> {{$post->category->name}} </a>
              </div>
              <div class="blog-post-title">
                <a href="{{ route('single-blog', ['slug' => $post->slug]) }}">{{$post->title}}</a>
              </div>
              <div class="blog-post-meta">
                <ul>
                  <li>By <a href="{{ route('about') }}">{{$post->user->name}}</a></li>
                  <li>
                    <i class="fa fa-clock-o"></i>
                    {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
                </li>
                </ul>
              </div>
              <p>
                {{ Str::limit($post->body, 150) }} <!-- Limit to 150 characters -->
            </p>
              <a href="{{ route('single-blog', ['slug' => $post->slug]) }}" class="blog-post-action">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </article> 
          @endforeach
          
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
        
          
        </div>
        <div class="col-lg-4">
          <div class="blog-post-widget">
            <div class="latest-widget-title">
              <h2>Trending post</h2>
            </div>
            @foreach ($posts->where('trending', 1) as $post)
            
            <div class="latest-widget">
              <div class="latest-widget-thum">
                <a href="{{ route('single-blog', ['slug' => $post->slug]) }}"">
                  <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 75px; background-color: {{ $post->image }};" alt="blog-thum"> <span class="text-uppercase font-weight-bold text-white" style="font-size: 1rem;">Image</span></div></a>
                <div class="icon">
                  <a href="{{ route('single-blog', ['slug' => $post->slug]) }}"">
                    <img src="{{asset('frontendtemplate/images/blog/icon.svg')}}" alt="icon" /></a>
                </div>
              </div>
              <div class="latest-widget-content">
                <div class="content-title">
                  <a href="{{ route('single-blog', ['slug' => $post->slug]) }}"">{{$post->title}}</a>
                </div>
                <div class="content-meta">
                  <ul>
                    <li>
                      <i class="fa fa-clock-o"></i>
                      {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>