@extends('layouts.app')
@section('content')

<div class="container">
    <h2 class="text-secondary ms-2 my-4">Add Project</h2>

    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-title">Title</label>
            <input class="form-control" id="project-title" type="text" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-description">Description</label>
            <textarea class="form-control" id="project-description" rows="4" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-img">Image</label>
            <input class="form-control" id="project-img" type="file" name="image">
        </div>
        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-github">GitHub Link</label>
            <input class="form-control" id="project-github" type="text" name="github">
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

@endsection