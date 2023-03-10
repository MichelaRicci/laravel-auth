@extends('layouts.app')

@section('title','Projects-details')

@section('content')
<section>
    <div class="container">
        <div class="card mt-5">
          <div class="card-body text-center">
              <h1 class="card-title">Current project {{ $project->title }}</h1>
              <p class="card-text">{{ $project->content }}</p>
              <a href="{{ $project->github }}" class="btn btn-primary">GitHub</a>
          </div>
          <figure class="text-center">
              <img src="{{ $project->image }}" class="img-fluid" alt="{{ $project->title }}">
          </figure>
        </div>
        <div class="d-flex justify-content-center align-items-center py-2">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</section>
@endsection