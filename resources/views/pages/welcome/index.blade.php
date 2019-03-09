@extends('layouts.app')

@push('header')
<style type="text/css">

.swiper-container {
    width: 326px;
    overflow: visible;
}

.swiper-nav {
    display: flex;
    min-height: 48px;
    align-items: center;
    justify-content: space-evenly;
    margin: 32px auto 0;
}

.swiper-pagination {
    position: initial;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 32px;
}

.swiper-slide {
    text-align: center;
    background: #fff;
    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;

    box-shadow: 0 8px 35px 0 rgba(50, 50, 93, 0.1), 0 5px 15px 0 rgba(0, 0, 0, 0.07);
    position: relative;
    border-radius: 3px;
    background-color: #fff;
    margin-top: 8px;
    text-align: center;
    padding: 56px 16px;
    height: initial;
    opacity: 0.4;
    transition: opacity 0.2s ease-in-out;
}

.swiper-slide:hover {
    opacity: 1;
}

.swiper-slide-active {
    opacity: 1;
}

.swiper-slide::before {
    background-image: url({{asset('images/icons/quote-left.svg')}});
    top: 16px;
    left: 16px;
    content: '';
    position: absolute;
    height: 32px;
    width: 32px;
}

.swiper-slide::after {
    background-image: url({{asset('images/icons/quote-right.svg')}});
    top: 16px;
    right: 16px;
}

.swiper-pagination-bullet-active {
    opacity: 1 !important;
}

.swiper-pagination-bullet {
    opacity: .2;
    background-color: #3490dc;
    height: 12px;
    width: 12px;
    margin: 8px;
    display: inline-block;
    border-radius: 100%;
    cursor: pointer;
}

.swiper-button-next {
    background-image: url({{asset('images/icons/dart-right.svg')}});
}

.swiper-button-prev {
    background-image: url({{asset('images/icons/dart-left.svg')}});
}

.swiper-navigation-arrow {
    box-shadow: 0 8px 35px 0 rgba(50, 50, 93, 0.1), 0 5px 15px 0 rgba(0, 0, 0, 0.07);
    transition: box-shadow 0.2s ease-in-out;
    position: initial;
    flex: 0 0 auto;
    margin-top: 0;
    background-color: #fff;
    width: 48px;
    height: 48px;
    border-radius: 100%;
    background-size: 16px 16px;
    cursor: pointer;
}

p {
    color: #536273;
}

a.nav-link {
    color: inherit;
}

.nav .active {
    background-color: white !important;
    color: inherit !important;
}

.nav .active, .btn-shadow {
    box-shadow: 0 8px 35px 0 rgba(50, 50, 93, 0.1), 0 5px 15px 0 rgba(0, 0, 0, 0.07);
    transition: .2s;
}

.nav .active:hover, .btn-shadow:hover {
    box-shadow: 0 10px 35px 0 rgba(50, 50, 93, 0.1), 0 10px 25px 0 rgba(0, 0, 0, 0.07) ;
}

.nav .active:active, .btn-shadow:active, .nav .active:visited, .btn-shadow:visited {
    box-shadow: 0 15px 35px 0 rgba(50, 50, 93, 0.1), 0 5px 15px 0 rgba(0, 0, 0, 0.07) !important;
}

.nav .active:focus {
    box-shadow: 0 8px 35px 0 rgba(50, 50, 93, 0.1), 0 5px 15px 0 rgba(0, 0, 0, 0.07) !important;
}

@-webkit-keyframes animateCloudA {
    0% {
        margin-left: -40%;
    }
    100% {
        margin-left: 100%;
    }
}

@-moz-keyframes animateCloudA {
    0% {
        margin-left: -40%;
    }
    100% {
        margin-left: 100%;
    }
}

@keyframes animateCloudA {
    0% {
        margin-left: -40%;
    }
    100% {
        margin-left: 100%;
    }
}


@-webkit-keyframes animateCloudB {
    0% {
        margin-left: 20%;
    }
    100% {
        margin-left: 100%;
    }
}

@-moz-keyframes animateCloudB {
    0% {
        margin-left: 20%;
    }
    100% {
        margin-left: 100%;
    }
}

@keyframes animateCloudB {
    0% {
        margin-left: 20%;
    }
    100% {
        margin-left: 100%;
    }
}

@-webkit-keyframes animateCloudC {
    0% {
        margin-left: 50%;
    }
    100% {
        margin-left: 100%;
    }
}

@-moz-keyframes animateCloudC {
    0% {
        margin-left: 50%;
    }
    100% {
        margin-left: 100%;
    }
}

@keyframes animateCloudC {
    0% {
        margin-left: 50%;
    }
    100% {
        margin-left: 100%;
    }
}

@-webkit-keyframes animateCloudD {
    0% {
        margin-left: 75%;
    }
    100% {
        margin-left: 800%;
    }
}

@-moz-keyframes animateCloudD {
    0% {
        margin-left: 75%;
    }
    100% {
        margin-left: 100%;
    }
}

@keyframes animateCloudD {
    0% {
        margin-left: 75%;
    }
    100% {
        margin-left: 100%;
    }
}

@-webkit-keyframes animateCloudE {
    0% {
        margin-left: 10%;
    }
    100% {
        margin-left: 100%;
    }
}

@-moz-keyframes animateCloudE {
    0% {
        margin-left: 10%;
    }
    100% {
        margin-left: 100%;
    }
}

@keyframes animateCloudE {
    0% {
        margin-left: -15%;
    }
    100% {
        margin-left: 100%;
    }
}
/* ANIMATIONS */

.x1 {
	-webkit-animation: animateCloudA 190s linear infinite;
	-moz-animation: animateCloudA 190s linear infinite;
	animation: animateCloudA 190s linear infinite;
	
	-webkit-transform: scale(0.65);
	-moz-transform: scale(0.65);
	transform: scale(0.65);
}

.x2 {
	-webkit-animation: animateCloudB 120s linear infinite;
	-moz-animation: animateCloudB 120s linear infinite;
	animation: animateCloudB 120s linear infinite;
	
	-webkit-transform: scale(0.3);
	-moz-transform: scale(0.3);
	transform: scale(0.3);
}

.x3 {
	-webkit-animation: animateCloudA 175s linear infinite;
	-moz-animation: animateCloudA 175s linear infinite;
	animation: animateCloudA 175s linear infinite;
	
	-webkit-transform: scale(0.5);
	-moz-transform: scale(0.5);
	transform: scale(0.5);
}

.x4 {
	-webkit-animation: animateCloudB 168s linear infinite;
	-moz-animation: animateCloudB 168s linear infinite;
	animation: animateCloudB 168s linear infinite;
	
	-webkit-transform: scale(0.4);
	-moz-transform: scale(0.4);
	transform: scale(0.4);
}

.x5 {
	-webkit-animation: animateCloudC 245s linear infinite;
	-moz-animation: animateCloudC 245s linear infinite;
	animation: animateCloudC 245s linear infinite;
	
	-webkit-transform: scale(0.55);
	-moz-transform: scale(0.55);
	transform: scale(0.55);
}

.x6 {
	-webkit-animation: animateCloudE 125s linear infinite;
	-moz-animation: animateCloudE 125s linear infinite;
	animation: animateCloudE 125s linear infinite;
	
	-webkit-transform: scale(0.30);
	-moz-transform: scale(0.30);
	transform: scale(0.30);
}

.x7 {
	-webkit-animation: animateCloudD 45s linear infinite;
	-moz-animation: animateCloudD 45s linear infinite;
	animation: animateCloudD 45s linear infinite;
	
	-webkit-transform: scale(0.62);
	-moz-transform: scale(0.62);
	transform: scale(0.62);
}

.cloud {
	background: #fff;
	background: -moz-linear-gradient(top,  #fff 5%, #f1f1f1 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(5%,#fff), color-stop(100%,#f1f1f1));
	background: -webkit-linear-gradient(top,  #fff 5%,#f1f1f1 100%);
	background: -o-linear-gradient(top,  #fff 5%,#f1f1f1 100%);
	background: -ms-linear-gradient(top,  #fff 5%,#f1f1f1 100%);
	background: linear-gradient(top,  #fff 5%,#f1f1f1 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#f1f1f1',GradientType=0 );
	
	-webkit-border-radius: 100px;
	-moz-border-radius: 100px;
	border-radius: 100px;
	
	-webkit-box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);
	box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);

	height: 120px;
	position: relative;
	width: 350px;
}

.cloud:after, .cloud:before {
    background: #fff;
	content: '';
	position: absolute;
	z-indeX: -1;
}

.cloud:after {
	-webkit-border-radius: 100px;
	-moz-border-radius: 100px;
	border-radius: 100px;

	height: 100px;
	left: 50px;
	top: -50px;
	width: 100px;
}

.cloud:before {
	-webkit-border-radius: 200px;
	-moz-border-radius: 200px;
	border-radius: 200px;

	width: 180px;
	height: 180px;
	right: 50px;
	top: -90px;
}
</style>
@endpush

@section('content')
	
	@include('pages.welcome.sections._lead')
    @include('pages.welcome.sections.rights')
    @include('pages.welcome.sections.how')
    @include('pages.welcome.sections.testimonials')
    @include('pages.welcome.sections.recommend')

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
    $('.mountains').css('transform', 'scale(' + grow + ')');
    $('.clouds').css('opacity', opacity);
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