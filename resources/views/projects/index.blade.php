@extends('layouts.app')
@section('content')

<div class="container mt-4 mb-5">
    <div class="d-flex gap-3 align-items-center mb-4">
        <h2 class="text-secondary m-0">All Projects</h2>
        
        {{-- admin dashboard --}}
        @auth
            @if(auth()->user()->isAdmin())
                <a class="btn btn-outline-primary fs-4" href="{{route('admin.projects.create')}}">Add Project</a>
            @endif
        @endauth
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($projects as $project)
            <div class="col">
                <div class="card text-center">
                    <a class="text-decoration-none text-black" href="{{route('projects.show', $project)}}">
                        <img src="{{asset($project['cover_image'])}}" class="card-img-top" alt="{{$project['title']}}">
                        <ul class="card-body px-3 pt-3 pb-2 list-unstyled">
                            <li><b class="fs-4 bg-info px-2 py-1 rounded-3">{{$project['title']}}</b></li>
                            <li class="my-2">{{$project['description']}}</li>
                            @auth
                            @if(auth()->user()->isAdmin())
                            <li class="mt-3">
                                <div class="d-flex gap-1 justify-content-center">
                                    <a class="btn btn-outline-primary" href="{{route('admin.projects.edit', $project)}}">Edit Project</a>
                                    <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete Project</button>
                                </div>
                            </li>
                            @endif
                            @endauth
                        </ul>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>


{{-- delete modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fw-bold" id="exampleModalLabel">Delete Project</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-5">Sure you want to Delete this Project?</div>
      <div class="modal-footer">
        <button class="btn btn-primary fs-5" data-bs-dismiss="modal">No</button>
        <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger fs-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Yes, delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection