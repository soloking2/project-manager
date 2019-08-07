@extends('layouts.app')

@section('content');
<div class="container">
  <div class="row">
  <div class="col-lg-8 mx-auto">
    <h1>Edit Project</h1>
    <form method="post" action="{{ route('projects.update', [$project->id]) }}">
                {{ csrf_field()}}
                <input type="hidden" name="_method" value="put">

        <div class="form-group">
          <label for="project-name">project Name <span class="required"><sup>*</sup></span></label>
          <input type="text" placeholder="Enter Name" name="name" id="project-name" spellcheck="false" class="form-control" value="{{ $project->name }}" required/>
        </div>

        <div class="form-group">
          <label for="project-content">Description</label>
          <textarea name="description" placeholder="Enter description" id="project-content" style="resize: vertical;" rows="5"
          class="form-control autosize-target text-left" spellcheck="false">{{ $project->description }}</textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary btn-block" value="Submit">
        </div>
    </form>
  </div>
  <div class="col-lg-2 col-md-2">
    <h4 class="display-5">Actions</h4>
    <ol class="list-unstyled">
      <li><a href="/projects/{{ $project->id }}">My project</a></li>
      <li><a href="/projects">All projects</a></li>
    </ol>
  </div>
</div>
</div>



@endsection
