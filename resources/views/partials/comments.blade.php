
<div class="col-lg-12 col-md-12 float-right">
  <div class="card p-2 bg-default">
    <h2 class="card-title mx-auto mt-3"><i class="glyphicon fa-comment"></i>Recent Comments</h2>
    <div class="row">
      @foreach($commens as $comment)
      <div class="col-lg-2 col-md-2">
        <button class="btn btn-secondary ml-4"><span class="badge badge-light">{{ $comment->user->id }}</span></button>
      </div>
      <div class="col-lg-10 col-md-10">
      <ul class="list-unstyled">
      <li class="card-header">
        <div class="media-body">
          <h5 class="card-subtitle">
            <a href="users/{{ $comment->user->id }}" class="text-secondary">{{ $comment->user->name }}</a>
          <small>Commented on {{ $comment->created_at }}</small>
        </h5>
        <p class="lead">{{ $comment->body }}</p>
        <b>Proof:</b>
        <p class="text-dark">{{ $comment->url }}</p>
      </div>
    </li>
    </ul>
  </div>
  @endforeach
</div>
</div>
</div>
