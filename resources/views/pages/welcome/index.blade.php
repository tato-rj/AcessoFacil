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
    resetResults();
    showResults($input);

    $.ajax({
        type: "GET",
        url: "https://iatacodes.org/api/v6/autocomplete",
        contentType: "application/json",
        data: {'api_key': app.iataKey, 'query': 'madrid'},
        dataType: "jsonp",
        success: function( response ){
            console.log(response);
        },
        error: function( error ){
            // Log any error.
            console.log( "ERROR:", error );
        },
        complete: function(){
            // When this completes
        }
    });

    $('.autocomplete-temp > div').on('click', function() {
        $result = $(this);
        selectResult($input, $result);
        resetResults();
    });
});

function showResults($input)
{
    let val = $input.val();
    let $resultsContainer = $input.siblings('.autocomplete-results');
    let $resultsTemp = $resultsContainer.find('.autocomplete-temp');
    let $resultsModel = $resultsContainer.find('.result-model');

    $resultsTemp.append($resultsModel.clone().removeClass('result-model').show());
    $resultsContainer.show();
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
</script>
@endpush