@extends('welcome')

@section('title', 'Posts')

@section('content')
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <div class="col-lg-8">
                <article class="blog-details">
                    <div class="post-img">
                        @if ($post->image != '')
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
                        </div>
                        @else
                        <div class="mb-2">
                            <img src="{{ asset('images/avatar.jpg') }}" alt="Avatar" width="200px">
                        </div>
                        @endif
                    </div>

                    <h2 class="title">{{ $post->title }}
                    </h2>

                    <div class="meta-top">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                    href="blog-details.html">{{ $post->author->name }}</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                    href="blog-details.html"><time
                                        datetime="{{ $post->created_at->format('Y-m-d') }}">{{
                                        $post->created_at->format('M j, Y') }}</time></a>
                            </li>
                        </ul>
                    </div><!-- End meta top -->
                    <div class="content">
                        {{-- <article class="my-3 fs-5"> --}}
                            {!! $post->body !!}
                            {{-- </article> --}}
                    </div><!-- End post content -->
                </article><!-- End blog post -->
            </div>

            <div class="col-lg-4">

                <div class="sidebar">
                    <div class="sidebar-item recent-posts">
                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="mt-3">
                            @foreach ($silderpost as $item)
                            <div class="post-item mt-3">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                <div>
                                    <h4><a href="{{ route('post.show', $item->id) }}">{{ htmlspecialchars($post->title)
                                            }}</a>
                                    </h4>
                                    <time datetime="{{ $item->created_at->format('Y-m-d') }}">{{
                                        $item->created_at->format('M j, Y') }}</time>
                                </div>
                            </div><!-- End recent post item-->
                            @endforeach
                        </div>
                    </div><!-- End sidebar recent posts-->
                </div><!-- End Blog Sidebar -->

            </div>
        </div>

    </div>
</section>
@endsection
