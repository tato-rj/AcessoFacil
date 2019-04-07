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
@endpush