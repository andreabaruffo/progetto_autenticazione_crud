<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{Storage::url($article->img)}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">Autore:{{$article->author}}</p>
          <p class="card-text">{{$article->body}}</p>
          <a href="{{route('article.detail', ['title'=>$article->title])}}" class="btn btn-primary">Go somewhere</a>
          <p class="card-text"><small class="text-muted">{{$article->created_at->format('d/m/y')}}</small></p>
        </div>
      </div>
    </div>
  </div>