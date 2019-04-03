<div class="d-flex shadow z-10" style="max-width: 656px;">
  <div class="easy-autocomplete" style="z-index: 1000">
    <input type="text" class="form-control border border-blue" id="autocomplete-departure" data-url="{{route('api.airports.autocomplete')}}" style="padding-left: 52px; padding-right: 32px; height: 62px; max-width: 222px; border-right: none !important;
  background: url({{asset('images/input/arrow-separator.svg')}}) right center no-repeat, url({{asset('images/input/marker.svg')}}) 16px center no-repeat, #fff;
    " placeholder="Partida">
  </div>
  <div class="easy-autocomplete" style="z-index: 1000">
    <input type="text" class="form-control border border-blue" id="autocomplete-arrival" data-url="{{route('api.airports.autocomplete')}}" style="padding-left: 52px; height: 62px; max-width: 222px; border-left: none !important;
      background-image: url({{asset('images/input/marker.svg')}});
      background-position: 16px center;
      background-repeat: no-repeat;
      background-size: 24px;
      padding-right: 16px;
    " placeholder="Chegada">
  </div>
  <div class="input-group-append">
    <button class="btn btn-blue px-5" style="white-space: nowrap;" type="button"><strong>Ver indenização</strong></button>
  </div>
</div>
