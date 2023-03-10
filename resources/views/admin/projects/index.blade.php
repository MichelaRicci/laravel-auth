@extends('layouts.app')

@section('title','Projects')
    
@section('content')
<section id="projects">
    <div class="container py-4">
        <div class="d-flex flex-wrap">
            @foreach ($projects as $project)
                <div class="col-6 my-3" style="height: 400px;">
                    <a href="{{ route('admin.projects.show', $project['id']) }}" style="text-decoration: none; color:black">
                        <div class="card d-flex flex-column-reverse align-items-center justify-content-between mb-3">                     
                            <figure class="text-center">
                                <img src="{{ $project->image }}" alt="{{ $project->title }}">
                            </figure>
                            <div class="text-center">
                                <h1>Project {{ $project->title }}</h1>
                            </div>
                        </div>
                    </a>
                    <div class="d-flex justify-content-center align-items-center mt-3 mb-5 gap-3">                     
                        <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project->id) }}">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
    
@endsection