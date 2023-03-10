@extends('layouts.app')

@section('title','Projects')
    
@section('content')
<section id="projects">
    <div class="container py-4">
        <div class="d-flex g-3 flex-wrap">
            @foreach ($projects as $project)
                <div class="col-6 my-3" style="height: 300px;">
                    <a href="{{ route('admin.projects.show', $project['id']) }}" style="text-decoration: none; color:black">
                        <div class="card d-flex flex-column-reverse align-items-center justify-content-between h-100">                     
                            <figure class="text-center w-100 h-50 ">
                                <img src="{{ $project->image }}" alt="{{ $project->title }}" class="img-fluid h-100">
                            </figure>
                            <div class="text-center">
                                <h1>Project {{ $project->title }}</h1>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
    
@endsection