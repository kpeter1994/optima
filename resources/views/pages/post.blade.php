@extends('layouts.main')

@section('class')
    bg-fixed-image-2
@endsection

@section('content')
    <div class="container" id="post">
        <div class="row">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Főoldal</a></li>
                        <li class="breadcrumb-item " aria-current="page">Blog</li>
                    </ol>
                </nav>
                <a class="fs-5 fw-bolder text-decoration-none text-light" href="">Alkohol</a>
                <h1>{{$post->title}}</h1>
                <hr>
                <div class="author">
                    <img src="{{asset('/img/dudits-denes-face.jpg')}}" alt="">
                    <span>Dudits Dénes</span>
                    <span>|</span>
                    <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Alkohol</a>
                    <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Függőség</a>
                </div>
                <hr>
                <div>
                    {!! $post->body !!}
                </div>
            </div>
        </div>


    </div>
    @include('partials._CTA')
@endsection
