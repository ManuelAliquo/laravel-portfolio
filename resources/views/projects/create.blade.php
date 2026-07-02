@extends('layouts.app')
@section('content')

<div class="container">
    <h2 class="text-secondary ms-2 my-4">Add Project</h2>

    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-title">Title</label>
            <input class="form-control" id="project-title" type="text" name="title" placeholder="Project Title" required>
        </div>
        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-description">Description</label>
            <textarea class="form-control" id="project-description" rows="4" name="description" placeholder="Project Description" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-img">Image</label>
            <input class="form-control" id="project-img" type="file" name="image" required>
        </div>
        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-type">Project Type</label>
            <select class="form-select" id="project-type" name="type_id" aria-label="Default select example" required>
                <option selected value="">Select a Type</option>
                @foreach ($types as $type)
                    <option value="{{$type['id']}}">{{$type['name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label mb-0 ms-1" for="project-github">GitHub Link</label>
            <input class="form-control" id="project-github" type="text" name="github" placeholder="GitHub Repository Link" required>
        </div>
        <div class="d-flex flex-column mb-5">
            <button type="submit" class="btn btn-success fs-5"><b>-</b> Add Project <b>-</b></button>
        </div>
    </form>
</div>

@endsection