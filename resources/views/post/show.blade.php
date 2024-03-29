@extends('layouts.main')

@section('content')

<main class="blog-post">
    <div class="container">
        <h1 class="edica-page-title aos-init aos-animate" data-aos="fade-up">{{ $post->title }}</h1>
        <p class="edica-blog-post-meta aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">•{{ $date->translatedFormat('F') }} {{ $date->day }}, {{ $date->year }}• {{ $date->format('H:i') }} • {{ $post->comments->count() }} Комментария</p>
        <section class="blog-post-featured-img aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/'. $post->main_image)  }}" alt="featured image" class="w-50">
        </section>
        <section class="post-content">

            <div class="row">
                <div class="col-lg-9 mx-auto">
                    {!! $post->content !!}
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <section class="py-3">
                    <form action="{{ route('post.like.store', $post->id) }}" method="post">
                        @csrf
                        <button type="submit" class="border-0 bg-transparent">
                            @auth
                            @if(auth()->user()->likedPosts->contains($post->id))
                                <i class="fas fa-heart"></i>
                            @else
                                <i class="far fa-heart"></i>

                            @endif
                            @endauth


                        </button>
                    </form>
                </section>
                @if ($relatedPosts->count() > 0)

                <section class="related-posts">
                    <h2 class="section-title mb-4 aos-init" data-aos="fade-up">Схожие посты</h2>
                    <div class="row">
                        @foreach ($relatedPosts as $relatedPosts)

                        <div class="col-md-4 aos-init" data-aos="fade-right" data-aos-delay="100">
                            <img src="{{ asset('storage/'. $relatedPosts->main_image)  }}" alt="related post" class="post-thumbnail">
                            <p class="post-category">{{ $relatedPosts->category->title }}</p>
                            <a href="{{ route('post.show', $relatedPosts->id) }}"><h5 class="post-title">{{ $relatedPosts->title }}</h5></a>

                        </div>
                        @endforeach
                    </div>
                </section>
                @endif
                <section class="comment-list mb-5">
                    <h1>Комментарии ({{ $post->comments->count() }})</h1>
                    @foreach ($post->comments as $comment)

                    <div class="comment-text mb-3">
                        <span class="username">
                            <div> {{ $comment->user->name }} </div>
                            <span class="text-muted float-right">{{ $comment->dateAsCarbon->diffForHumans() }}</span>
                        </span><!-- /.username -->
                        {{ $comment->message }}
                    </div>
                    @endforeach
                </section>
                @auth()
                <section class="comment-section">
                    <h2 class="section-title mb-5 aos-init" data-aos="fade-up">Отправить комментарий</h2>
                    <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12 aos-init" data-aos="fade-up">
                            <label for="comment" class="sr-only">Comment</label>
                            <textarea name="message" id="comment" class="form-control" placeholder="Напиши комментарий" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                        <div class="row">
                            <div class="col-12 aos-init" data-aos="fade-up">
                                <input type="submit" value="Send Message" class="btn btn-warning">
                            </div>
                        </div>
                    </form>
                </section>
                @endauth
            </div>
        </div>
    </div>
</main>

@endsection
