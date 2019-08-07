@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 float-right">
      <div class="jumbotron">
        <h2>{{ $company->name }}</h2>
        <p class="lead">{{ $company->description }}</p>
      </div>

      <div class="row">
        @foreach($company->projects as $project)
        <div class="col-lg-4 col-md-4">
          <h2>{{ $project->name }}</h2>
          <p class="text-danger">{{ $project->description }}</p>
          <p><a href="/projects/{{ $project->id}}" class="btn btn-success"> VIEW PROJECT &</a></p>
        </div>
        @endforeach
          <p><a href="/projects/create" class="btn btn-primary" type="button">Add Project</a></p>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 float-right">
      <h4 class="display-6">Actions</h4>
      <ol class="list-unstyled">
        <li><a href="/companies/{{ $company->id }}/edit" class="btn btn-outline-secondary mt-2">Edit</a></li>
        <li><a href="/companies/{{ $company->id }}" class="btn btn-outline-secondary mt-2">View</a></li>
        <li>
          <a href="#"
          onclick="
            var result = confirm('Are you sure you want to delete this company?');
            if(result){
              event.preventDefault();
              document.getElementById('delete-form').submit();
            };
          "
          class="btn btn-outline-secondary mt-2">
            Delete</a>
            <form id="delete-form" method="POST" action="{{ route('companies.destroy',[$company->id]) }}" style="display:none;">
                <input type="hidden" name="_method" value="delete">
                {{ csrf_field() }}
            </form>

          </li>
      </ol>
    </div>
</div>
</div>
@endsection
