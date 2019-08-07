@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-9 col-md-9 float-right">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h2>{{ $project->name }}</h2>
          <p class="lead">{{ $project->description }}</p>
      </div>
      </div>
      @include('partials.comments')

      <div class="row" style="background-color:#fff; padding:20px;">
        <form method="post" action="{{ route('comments.store') }}" style="width:100%;">
                    {{ csrf_field()}}

                    <input type="hidden" name="commentable_type" value="App\Project">
                    <input type="hidden" name="commentable_id" value="{{ $project->id }}">
          <div class="form-group">
              <label for="comment-content">Comments</label>
              <textarea name="body" placeholder="Enter comment" id="comment-content" style="resize: vertical;" rows="3"
              class="form-control autosize-target text-left" spellcheck="false"></textarea>
          </div>
          <div class="form-group">
              <label for="comment-content">Proof of work done (url/photos)</label>
              <textarea name="url" placeholder="Enter url or screenshots" id="comment-content" style="resize: vertical;" rows="2"
              class="form-control autosize-target text-left" spellcheck="false"></textarea>
          </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" value="Submit">
            </div>
        </form>
      </div>
    </div>

    <div class="col-lg-3 col-md-3 float-right">
      <h4 class="display-6">Actions</h4>
      <ol class="list-unstyled">
        <li><a href="/projects/{{ $project->id }}/edit" class="btn btn-outline-secondary mt-2">Edit</a></li>
        <li><a href="/projects/create" class="btn btn-outline-secondary mt-2">Create New project</a></li>
        <li><a href="/projects" class="btn btn-outline-secondary mt-2">My Projects</a></li>
        @if($project->user_id == Auth::user()->id)
        <li>
          <a href="#" onclick="
            var result = confirm('Are you sure you wish to delete this project?');
            if(result){
                event.preventDefault();
                document.getElementById('delete-form').submit();
            }" class="btn btn-outline-secondary mt-2">
              Delete
          </a>
          <form id="delete-form" action="{{ route('projects.destroy', [$project->id]) }}" method="POST" style="display:none;">
                <input type="hidden" name="_method" value="delete">
                {{ csrf_field() }}
          </form>
        </li>
        @endif
      </ol>

      <hr/>

      <h4>Add Members</h4>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <form id="add-user" action="{{ route('projects.adduser') }}" method="POST">
              {{ csrf_field() }}
            <div class="input-group">
              <input type="text" name="email" class="form-control" placeholder="Email">
              <input type="hidden" name="project_id" value="{{ $project->id }}">
              <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">Add</button>
              </span>
            </div>
          </form>
        </div>
    </div>
<br/>
    <h4>Team Members</h4>
    <ol class="list-unstyled">
      @foreach($project->users as $user)
      <li><a href="#"> {{ $user->email }}</a></li>
      @endforeach
    </ol>
    </div>
</div>
</div>
@endsection
