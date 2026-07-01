@extends('layouts.app')
@section('content')

<div class="container show-page my-5">
    <section class="mx-auto project-sect d-flex flex-column align-items-center">
            <h1 class="fw-bold">{{$project['title']}}</h1>
            <p class="text-center">{{$project['description']}}</p>
            <div class="image-container rounded-3">
                <img class="img-fluid" src="{{asset($project['cover_image'])}}" alt="cover-image">
            </div>
            <div class="d-flex gap-3 mt-3">
                @foreach ($project['technologies'] as $technology)
                    <span class="px-3 py-2 bg-warning fs-5 rounded-3 fw-semibold">{{$technology}}</span>
                @endforeach
            </div>
            <button class="btn btn-primary mt-3 fs-5">
                <a class="text-white text-decoration-none" href="{{$project['url_repo']}}" target="_blank">
                    View GitHub Repository
                </a>
            </button>
    </section>
</div>

@endsection