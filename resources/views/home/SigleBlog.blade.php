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
                            <div class="post-item mt-3">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="">
                                <div>
                                    <h4><a href="{{ route('post.show', $post->id) }}">{{ htmlspecialchars($post->title)
                                            }}</a>
                                    </h4>
                                    <time datetime="{{ $post->created_at->format('Y-m-d') }}">{{
                                        $post->created_at->format('M j, Y') }}</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="/assets_user/img/blog/blog-recent-2.jpg" alt="">
                                <div>
                                    <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>
                            <!-- End recent post item-->

                            <div class="post-item">
                                <img src="/assets_user/img/blog/blog-recent-3.jpg" alt="">
                                <div>
                                    <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a>
                                    </h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>
                            <!-- End recent post item-->

                            <div class="post-item">
                                <img src="/assets_user/img/blog/blog-recent-4.jpg" alt="">
                                <div>
                                    <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>
                            <!-- End recent post item-->

                            <div class="post-item">
                                <img src="/assets_user/img/blog/blog-recent-5.jpg" alt="">
                                <div>
                                    <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>
                            <!-- End recent post item-->
                        </div>
                    </div><!-- End sidebar recent posts-->
                </div><!-- End Blog Sidebar -->

            </div>
        </div>

    </div>
</section>
@endsection