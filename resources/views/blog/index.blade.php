@extends('layouts.app')

@section('title', 'Colégio Xingu - Blog')

@section('content')

    <div id="blog">

        <div class="page-title-content"
            style="background: url('{{ asset('assets/images/banner-pages/blog.jpg') }}')">
            <div class="container">
                <h1>Blog</h1>
            </div>
        </div>

        <section class="intro">

            <div class="container">

                <div class="title-section text-center mb-3 mt-md-5">
                    <h2 class="m-0">DICAS E NOVIDADES</h2>
                    <hr>
                </div>

                <div class="text-center col-md-10 offset-md-1">
                    <p class="text-light">As melhores dicas para a educação do seu filho.</p><br>
                </div>

            </div>

        </section>

        <section class="blog-01">

            <div class="container">

                <div class="col-lg-10 offset-lg-1">

                    <div class="row">

                        @foreach ($posts as $post)

                        <div class="col-md-4">
                            <a href="{{ route('blog.post', ['post' => $post->slug]) }}" class="post">
                                <div class="post-image">
                                    <img class="img-fluid mb-3" src="{{ asset('storage/'.$post->thumbnail) }}" alt="">
                                </div>
                                <div class="post-info">
                                    <h3 class="post-title">{{ Str::limit($post->title, 75) }}</h3>
                                    <span class="post-date d-block">{{ $post->created_at->format('d/m/Y') }}</span>
                                    <button class="btn btn-primary link">Leia mais</button>
                                </div>
                            </a>
                        </div>

                        @endforeach

                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        {!! $posts->appends(Request::except('page'))->render() !!}
                    </div>


                </div>

            </div>

        </section>

    </div>
    
@endsection
