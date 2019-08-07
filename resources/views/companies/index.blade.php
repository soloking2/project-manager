@extends('layouts.app')

@section('content')
<div class="col-lg-6 mx-auto">
  <div class="card">
      <div class="card-body">
        <div class="row">
          <p class="card-title col-lg-8 col-md-8 col-sm-12">Companies</p>
          <p class="col-lg-4 col-md-4 col-sm-12"><a href="/companies/create" class="btn btn-outline-secondary">Create New</a></p>
      </div>
        <ul class="list-group">
          @foreach($companies as $company)
          <li class="list-group-item"><a href="/companies/{{ $company->id }}">{{ $company->name}}</li>
          @endforeach
        </ul>

      </div>
  </div>
</div>

@endsection
