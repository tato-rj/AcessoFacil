<div class="container">
    <div class="row align-items-center h-100vh">
        <div class="col-lg-4 col-md-6 col-sm-8 col-10 mx-auto text-center">
            <div>
                <img src="{{asset('images/brand/logo_horizontal.svg')}}" width="200" class="mb-2">
                <p class="lead mt-2">O site está em desenvolvimento. Volte em breve ou use o seu password para continuar.</p>            
            </div>

            <form method="POST" action="/enter">
                @csrf
                <div class="form-group">
                    <input type="password" name="gatepass" class="form-control {{(session()->has('denied')) ? 'is-invalid' : null}}" placeholder="Password">
                @if(session()->has('denied'))
                  <div class="invalid-feedback">
                    O password não está correto
                  </div>
                @endif                    
                </div>
                <button type="submit" class="btn btn-block btn-primary">Continuar</button>
            </form>
        </div>
    </div>
</div>