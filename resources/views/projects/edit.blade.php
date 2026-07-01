@extends('layouts.app')
@section('content')

<div class="container">
    <h2 class="text-secondary ms-2 my-4">Add a Project</h2>

    <form action="{{route('projects.update', $project)}}" method="POST">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-title">Title</label>
            <input class="form-control" id="project-title" type="text" name="title" value="{{$project['title']}}">
        </div>
        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-description">Description</label>
            <textarea class="form-control" id="project-description" rows="4" name="description">
                {{$project['description']}}
            </textarea>
        </div>
        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-img">Image</label>
            <input class="form-control" id="project-img" type="file" name="image" value="{{$project['cover_image']}}">
        </div>
        <div class="mb-3">
            <label class="form-label d-block mb-2 ms-1">Technologies</label>
            <div class="d-flex flex-wrap gap-3">
                @php
                $technologies = ['HTML', 'CSS', 'JavaScript', 'Bootstrap', 'React', 'PHP', 'Laravel', 'MySQL'];
                @endphp
                @foreach($technologies as $technology)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="technologies[]" value="{{$technology}}" id="tech-{{$technology}}">
                        <label class="form-check-label" href="#tech-{{$technology}}">
                            {{$technology}}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-github">GitHub Link</label>
            <input class="form-control" id="project-github" type="text" name="github" value="{{$project['url_repo']}}">
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

@endsection