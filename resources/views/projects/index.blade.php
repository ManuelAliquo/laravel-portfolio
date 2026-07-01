@extends('layouts.app')
@section('content')

<div class="container">
    <h2 class="text-secondary ms-2 my-4">All Projects</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        @foreach ($projects as $project)
            <div class="col">
                <div class="card text-center">
                    <a class="text-decoration-none text-black" href="{{route('projects.show', $project)}}">
                        <img src="{{$project['cover_image']}}" class="card-img-top" alt="{{$project['title']}}">
                    <ul class="card-body px-3 pt-3 pb-2 list-unstyled">
                        <li><b class="fs-4 bg-info px-2 py-1 rounded-3">{{$project['title']}}</b></li>
                        <li class="my-2">{{$project['description']}}</li>
                        <li class="d-flex gap-2 justify-content-center">
                            @foreach ($project['technologies'] as $technology)
                                <span class="px-2 py-1 bg-warning rounded-3">{{$technology}}</span>
                            @endforeach
                        </li>
                    </ul>
                </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection