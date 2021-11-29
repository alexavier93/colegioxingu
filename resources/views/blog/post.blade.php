@extends('layouts.app')

@section('title', $post->title)

@section('content')

    <div id="blog-post">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-pages/blog.jpg') }}')">
            <div class="container">
                <h1>Blog</h1>
            </div>
        </div>

        <section class="post mt-5">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-6">

                        <h2 class="post-title"><strong>{{ $post->title }}</strong></h2>

                        <span class="post-date d-block mb-2">{{ $post->created_at->format('d/m/Y') }}</span>

                        <div class="post-image">
                            <img class="w-100 mb-3" src="{{ asset('storage/'.$post->image) }}" alt="">
                        </div>

                        <div class="post-text">{!! $post->description !!}</div>

                    </div>

                    <div class="col-lg-4">
                        <div class="lasts-posts">

                            <h2><strong>Últimas do blog</strong></h2>

                            <ul>
                                @foreach ($posts as $item)
                                    <li class="mb-3"><a href="{{ route('blog.post', ['post' => $item->slug]) }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>

                        </div>
                    </div>

                </div>

            </div>

        </section>

    </div>

@endsection
