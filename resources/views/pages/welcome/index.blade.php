@extends('layouts.app')

@push('header')
<style type="text/css">
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

	<div style="height: 1200px"><div>

@endsection

@push('scripts')
<script type="text/javascript">
$(window).scroll(function() {
    let scroll = $(this).scrollTop();
    let flyX = 20 + scroll + 'px';
    let flyY = 50 - scroll/15 + '%';
    let grow = 1 + scroll/2750;
    let opacity = 1 - scroll/700;

    $('#plane').css({'right': flyX, 'top': flyY});
    $('.mountains').css('transform', 'scale(' + grow + ')');
    $('.clouds').css('opacity', opacity);
});
</script>
@endpush