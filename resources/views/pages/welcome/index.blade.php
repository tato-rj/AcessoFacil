@extends('layouts.app')

@section('content')
	
	@include('pages.welcome.sections._lead')
    @include('pages.welcome.sections.rights')
    @include('pages.welcome.sections.services')
    @include('pages.welcome.sections.quote')
    @include('pages.welcome.sections.testimonials')

@endsection

@push('scripts')

<script type="text/javascript">
$(window).scroll(function() {
    let scroll = $(this).scrollTop();
    let flyX = 20 + scroll + 'px';
    let flyY = 50 - scroll/15 + '%';
    let grow = 1 + scroll/2600;
    let opacity = 1 - scroll/700;

    $('#plane').css({'right': flyX, 'top': flyY});
    $('#skyline').css({'transform': 'scale(' + grow + ')', 'opacity': opacity});
    // $('.clouds').css('opacity', opacity);
});
</script>

<script>
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    width: 326,
    initialSlide: $('.swiper-slide').length/2,
    spaceBetween: 30,
    centeredSlides: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>

<script type="text/javascript">
$('.autocomplete input').on('keyup', function() {
    let $input = $(this);
    let val = $input.val();
    resetResults();
    showResults($input);

    if (val.length >= 2) {
        $.ajax({
            type: "GET",
            url: "https://iatacodes.org/api/v7/autocomplete.jsonp",
            contentType: "application/json",
            data: {'api_key': app.iataKey, 'query': val},
            dataType: "jsonp",
            success: function( data ){
                showResults($input, data.response.airports);

                $('.autocomplete-temp > div').on('click', function() {
                    $result = $(this);
                    selectResult($input, $result);
                    resetResults();
                });
            },
            error: function( error ){
                // Log any error.
                console.log( "ERROR:", error );
            },
            complete: function(){
                // When this completes
            }
        });
    } else {
        resetResults();
    }
});

function showResults($input, data)
{
    let val = $input.val();
    let $resultsContainer = $input.siblings('.autocomplete-results');
    let $resultsTemp = $resultsContainer.find('.autocomplete-temp');
    let $resultsModel = $resultsContainer.find('.result-model');

    $.each(data, function(index, airport) {
        let $result = $resultsModel.clone().removeClass('result-model');
        $result.attr('data-iata', airport.code);
        $result.children('.result-text > div:first-of-type').text(airport.code + ' - ' + airport.name);
        $result.children('.result-text > div:last-of-type').text(airport.country_name);

        if (airport.country_name == 'Brazil') {
            $resultsTemp.prepend($result.show());
        } else {
            $resultsTemp.append($result.show());
        }
    });

    $resultsContainer.show();
}

String.prototype.replaceAll = function(search, replacement) {
    return this.replace(new RegExp(search, 'gi'), replacement);
};

function highlight(str, val)
{
    return str.replaceAll(val, '<strong>'+val+'</strong>');
}

function selectResult($input, $result)
{
    let iata = $result.attr('data-iata');
    let name = $result.find('>div:first-of-type').text();

    $input.val(name).siblings('input').val(iata);
}

function resetResults()
{
    $('.autocomplete-temp').html('').parent().hide();
}

function delay(callback, ms) {
  var timer = 0;
  return function() {
    var context = this, args = arguments;
    clearTimeout(timer);
    timer = setTimeout(function () {
      callback.apply(context, args);
    }, ms || 0);
  };
}
</script>
@endpush