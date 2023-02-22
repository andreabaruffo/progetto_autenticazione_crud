<x-layout>
    <x-header 
        title="Contattaci per lavorare con noi"
    />
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{route('contacts.submit')}}">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Nome e Cognome</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Perchè vuoi lavorare con noi?</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary">Invio</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>