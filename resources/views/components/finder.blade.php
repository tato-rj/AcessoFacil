<div id="finder" class="d-inline-block">
  <form method="GET" action="/">
    <div class="d-flex shadow z-10">
      <div class="autocomplete">
        <input type="text" class="form-control border border-primary w-100" 
          required
          data-url="{{route('api.airports.autocomplete')}}" 
          style="padding-left: 52px; height: 62px; padding-right: 32px;  min-width: 280px;
          border-right: none !important; border-top-right-radius: 0; border-bottom-right-radius: 0; box-shadow: none !important;
          background: url({{asset('images/input/arrow-separator.svg')}}) right center no-repeat, url({{asset('images/input/marker.svg')}}) 16px center no-repeat, #fff;
        " placeholder="Partida">
        <input type="hidden" name="saida">
        @include('components.finder.results')
      </div>
      <div class="autocomplete">
        <input type="text" class="form-control border border-primary rounded-0 w-100" 
          required
          data-url="{{route('api.airports.autocomplete')}}" 
          style="padding-left: 52px; height: 62px; border-left: none !important; box-shadow: none !important;
          background-image: url({{asset('images/input/marker.svg')}});
          background-position: 16px center;
          background-repeat: no-repeat;
          background-size: 24px;
          padding-right: 16px; min-width: 280px;
        " placeholder="Chegada">
        <input type="hidden" name="chegada">
        @include('components.finder.results')
      </div>

      <button type="submit" class="btn btn-primary btn-wide" style="white-space: nowrap; border-top-left-radius: 0; border-bottom-left-radius: 0;" type="button"><strong>Ver indenização</strong></button>
    </div>
  </form>
</div>
