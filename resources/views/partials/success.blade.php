@if(session()->has('success'))
  <div class="alert alert-success alert-dismissable fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>
      {!! session()->get('success') !!}
    </strong>
  </div>
  @endif
