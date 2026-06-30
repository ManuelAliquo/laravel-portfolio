@extends('layouts.app')
@section('content')

<div class="container">
    <h2 class="fs-4 text-secondary my-4">All Projects</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        @foreach ($projects as $project)
            <div class="col">
                <div class="card">
                    <a href="{{route('projects.show', $project)}}">
                        <img src="{{$project['cover_image']}}" class="card-img-top" alt="{{$project['title']}}">
                    </a>
                    <ul class="card-body p-3 list-unstyled">
                        <li><b>Titolo:</b> {{$project['title']}}</li>
                        <li>
                            <b>Technologies:</b>
                            <ul>
                                @foreach ($project['technologies'] as $technology)
                                    <li>{{$technology}}</li>
                                @endforeach
                            </ul>
                        </li>
                        <li><b>Descrizione:</b> {{$project['description']}}</li>
                        @if($project['url_repo'])
                            <li>
                                <a href="{{$project['url_repo']}}" target="_blank">View GitHub Repository</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection