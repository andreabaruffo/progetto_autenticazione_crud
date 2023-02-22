<x-layout>
    <x-header 
        title="Commenta i tuoi personaggi preferiti"
    />
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
           @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Titolo Articolo</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}"> 
                      @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                      @enderror                     
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Autore</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{old('author')}}"> 
                        @error('author')
                              <div class="alert alert-danger">{{ $message }}</div>
                        @enderror                         
                    </div>
                      <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="file" class="form-control" name="img">                      
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Lascia un tuo pensiero</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror">{{old('title')}}</textarea>  
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror                     
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>