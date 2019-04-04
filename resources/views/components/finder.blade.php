<div id="finder" class="d-flex shadow z-10 w-100">
  <div class="easy-autocomplete">
    <input type="text" class="form-control border border-primary w-100" id="autocomplete-departure" 
      data-url="{{route('api.airports.autocomplete')}}" 
      style="padding-left: 52px; height: 62px; padding-right: 32px; 
      border-right: none !important; border-top-right-radius: 0; border-bottom-right-radius: 0; box-shadow: none !important;
      background: url({{asset('images/input/arrow-separator.svg')}}) right center no-repeat, url({{asset('images/input/marker.svg')}}) 16px center no-repeat, #fff;
    " placeholder="Partida">
  </div>
  <div class="easy-autocomplete">
    <input type="text" class="form-control border border-primary rounded-0 w-100" id="autocomplete-arrival" 
      data-url="{{route('api.airports.autocomplete')}}" 
      style="padding-left: 52px; height: 62px; border-left: none !important; box-shadow: none !important;
      background-image: url({{asset('images/input/marker.svg')}});
      background-position: 16px center;
      background-repeat: no-repeat;
      background-size: 24px;
      padding-right: 16px;
    " placeholder="Chegada">
  </div>
  <div class="input-group-append button-group">
    <button class="btn btn-primary px-5 w-100" style="white-space: nowrap; border-top-left-radius: 0; border-bottom-left-radius: 0;" type="button"><strong>Ver indenização</strong></button>
  </div>
</div>
