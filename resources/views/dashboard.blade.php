@extends('layouts.app')
@section('content')

<div class="container">
    <h2 class="text-secondary ms-2 my-4">Dashboard</h2>

    <a href="{{route('projects.create')}}">Add a Project</a>
</div>

@endsection
