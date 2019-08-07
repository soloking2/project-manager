@extends('layouts.app')

@section('content');
<div class="container">
  <div class="row">
  <div class="col-lg-8 mx-auto">
    <form method="post" action="{{ route('companies.update', [$company->id]) }}">
                {{ csrf_field()}}
                <input type="hidden" name="_method" value="put">

        <div class="form-group">
          <label for="company-name">Company Name <span class="required"><sup>*</sup></span></label>
          <input type="text" placeholder="Enter Name" name="name" id="company-name" spellcheck="false" class="form-control" value="{{ $company->name }}" required/>
        </div>

        <div class="form-group">
          <label for="company-content">Description</label>
          <textarea name="description" placeholder="Enter description" id="company-content" style="resize: vertical;" rows="5"
          class="form-control autosize-target text-left" spellcheck="false">{{ $company->description }}</textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary btn-block" value="Submit">
        </div>
    </form>
  </div>
  <div class="col-lg-2 col-md-2">
    <h4 class="display-5">Actions</h4>
    <ol class="list-unstyled">
      <li><a href="/companies/{{ $company->id }}">My Company</a></li>
      <li><a href="/companies">All Companies</a></li>
    </ol>
  </div>
</div>
</div>



@endsection
