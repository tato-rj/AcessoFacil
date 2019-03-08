<section id="lead" class="bg-align-center h-100vh position-relative" style="
background: rgb(186,224,255);
background: linear-gradient(0deg, rgba(186,224,255,1) 0%, rgba(199,230,255,1) 55%, rgba(233,245,255,1) 84%, rgba(255,255,255,1) 100%);
">

@include('pages.welcome.sections.clouds')
@include('pages.welcome.sections.mountains')

<img id="plane" src="{{asset('images/backgrounds/welcome/plane.svg')}}" class="position-absolute d-none d-lg-block" style="right: 20px; top: 50%; width: 308px; z-index: 10;">

<div class="container h-100">
	<div class="row h-100 align-items-center">
		<div class="col-12">
			<div style="max-width: 400px">
				<h2 class="mb-4 mr-4">Estamos aqui para lutar pelos <strong>seus direitos</strong></h2>
				<p class="mb-4" style="font-size: 1.15em">Nós somos especializados em indenizações para portadores de deficiência física</p>
			</div>
			@include('components.finder')
		</div>
	</div>
</div>

</section>
<div id="scroll-mark"></div>