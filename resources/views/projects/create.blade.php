@extends('layouts.app')

@section('content');
<div class="container">
  <div class="row">
  <div class="col-lg-8 mx-auto">
    <h1>Create New Project</h1>
    <form method="post" action="{{ route('projects.store') }}">
                {{ csrf_field()}}

        <div class="form-group">
          <label for="project-name">Poject Name <span class="required"><sup>*</sup></span></label>
          <input type="text" placeholder="Enter Name" name="name" id="project-name" spellcheck="false" class="form-control" required/>
        </div>
        @if($companies == null)
        <input
        type="hidden" name="company-id"
        class="form-control" value="{{ $company_id }}"
        />
        @endif

        @if($companies != null)
        <div class="form-group">
          <label for="company-id">Select Company</label>
            <select name="company-id" class="form-control">
              @foreach($companies as $company)
                <option value="{{ $company->id }}"> {{ $company->name }}</option>
              @endforeach
            </select>
        </div>
        @endif
        <div class="form-group">
          <label for="project-content">Description</label>
          <textarea name="description" placeholder="Enter description" id="project-content" style="resize: vertical;" rows="5"
          class="form-control autosize-target text-left" spellcheck="false"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary btn-block" value="Submit">
        </div>
    </form>
  </div>
  <div class="col-lg-2 col-md-2">
    <h4 class="display-5">Actions</h4>
    <ol class="list-unstyled">
      <li><a href="/projects">My projects</a></li>
    </ol>
  </div>
</div>
</div>



@endsection
