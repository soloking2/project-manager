@extends('layouts.app')

@section('content')
<div class="col-lg-6 mx-auto">
  <div class="card">
      <div class="card-body">
        <div class="row">
          <p class="card-title col-lg-8 col-md-8 col-sm-12">Projects</p>
          <p class="col-lg-4 col-md-4 col-sm-12"><a href="/projects/create" class="btn btn-outline-secondary">Create New</a></p>
      </div>
        <ul class="list-group">
          @foreach($projects as $project)
          <li class="list-group-item"><a href="/projects/{{ $project->id }}">{{ $project->name}}</li>
          @endforeach
        </ul>

      </div>
  </div>
</div>

@endsection
