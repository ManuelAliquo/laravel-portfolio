@extends('layouts.app')
@section('content')

<div class="container show-page my-5">
    <section class="mx-auto project-sect d-flex flex-column align-items-center">
            <h1 class="fw-bold">{{$project['title']}}</h1>
            <p class="text-center">{{$project['description']}}</p>
            <div class="image-container rounded-3">
                <img class="img-fluid" src="{{asset($project['cover_image'])}}" alt="cover-image">
            </div>
            <div class="d-flex gap-2">
                <span class="btn btn-warning mt-3 fs-5">{{$project['type']['name']}}</span>
                <a class="btn btn-primary mt-3 fs-5" href="{{$project['url_repo']}}" target="_blank">
                    View GitHub Repository
                </a>
            </div>
    </section>
</div>

@endsection