<section id="lead" class="bg-align-center h-100vh position-relative mb-5">

{{-- @include('pages.welcome.sections.landscape.clouds') --}}
{{-- @include('pages.welcome.sections.landscape.mountains') --}}

<img id="plane" src="{{asset('images/backgrounds/welcome/plane.svg')}}" class="position-absolute d-none d-lg-block z-20" style="right: 20px; top: 50%; width: 308px;">

<div class="container h-100">
	<div class="row h-100 align-items-center">
		<div class="col-12">
			<div style="max-width: 400px">
				<h2 class="mb-4 mr-4">Estamos aqui para lutar pelos <strong>seus direitos</strong></h2>
				<p class="mb-4" style="font-size: 1.15em">Nós somos especializados em indenizações para pessoas com deficiência física (PCD)</p>
			</div>
			@include('components.finder')
		</div>
	</div>
	<div class="position-absolute w-100 opacity-4" style="bottom: 0; left: 0; overflow: hidden; z-index: -1">
		<img src="{{asset('images/backgrounds/welcome/skyline.svg')}}" class="w-100" id="skyline">
	</div>
</div>

</section>
<div id="scroll-mark"></div>