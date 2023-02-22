<x-layout>
    <x-header 
    title="Dettaglio {{$article->title}}"
    />
    {{-- @if (session('message')) --}}
        {{-- <div class="alert alert-success">
            <p class="m-0">{{session('message')}}</p>
        </div>
    @endif --}}
    <div class="container my-5">
            <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
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
                                  <a href="{{route('homepage', )}}" class="btn btn-primary">Home</a>
                                  <a href="{{route('article.update',compact('article') )}}" class="btn btn-primary">Modifica</a>
                                  <form method="POST" action="{{route('article.delete', compact('article'))}}">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class=" btn btn-danger">Cancella</button>
                                  </form>
                                  <p class="card-text"><small class="text-muted">{{$article->created_at->format('d/m/y')}}</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
             </div>
    </div>
</x-layout>