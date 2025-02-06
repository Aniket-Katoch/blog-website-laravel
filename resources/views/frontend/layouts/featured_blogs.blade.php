<section class="featured">
  <div class="container">
    <div class="row">
      <div class="col-12">
        @if ($featuredBlog)
          <article class="featured-post">
            <div class="featured-post-content">
              <div class="featured-post-author">
                <p>By <span>{{ $featuredBlog->user ? $featuredBlog->user->name : 'Unknown' }}</span></p>
              </div>
              <a href="{{ route('single-blog', ['slug' => $featuredBlog->slug]) }}" class="featured-post-title">
                {{ $featuredBlog->title }}
              </a>
              <ul class="featured-post-meta">
                <li>
                  <i class="fa fa-clock-o"></i>
                  {{ \Carbon\Carbon::parse($featuredBlog->created_at)->format('F j, Y') }}
                </li>
              </ul>
            </div>
            <div class="featured-post-thumb" style="width: 50%">
              <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 300px; background-color: {{ $featuredBlog->image }};" alt="blog-thum"> <span class="text-uppercase font-weight-bold text-white" style="font-size: 3rem;">Image</span></div>
            </div>
          </article> 
        @else
          <p>No featured blog available.</p>
        @endif
      </div>
    </div>
  </div>
</section>
