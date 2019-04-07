<section id="footer-container">
	<div class="position-relative">
		<img src="{{asset('images/footer/plane.svg')}}" id="runway-plane" class="z-10" style="width: 220px; position: absolute; left: -20%; bottom: 0; transition-duration: .6s;">
		{{-- <img src="{{asset('images/footer/runway.svg')}}" class="w-100 opacity-4"> --}}
	</div>
	<footer class="">
		<div class="container">
			<div class="row py-5" style="font-size: .9em">
				<div class="col-12">
					<img src="{{asset('images/brand/logo_horizontal.svg')}}" class="mb-3" width="146">					
				</div>
				<div class="col-4">
					<p>Apesar de 8 milhões de pessoas em todo o mundo terem direito a compensação, menos de 2% estão cientes dos seus direitos. Queremos devolver o poder aos passageiros. Chegou a hora de conhecer os seus direitos.</p>
				</div>
				<div class="col-2">
					<ul class="list-flat">
						<p class="text-grey mb-1"><strong>Sobre nós</strong></p>
						<li class="mb-1"><a href="#" class="link-none">Quem somos</a></li>
						<li class="mb-1"><a href="#" class="link-none">Seus direitos</a></li>
						<li class="mb-1"><a href="#" class="link-none">Nossos serviços</a></li>
					</ul>
				</div>
				<div class="col-3">
					<p class="text-grey mb-1"><strong>Nossos serviços</strong></p>
					<ul class="list-flat">
						<li class="mb-1"><a href="#" class="link-none">Documentação para acompanhantes (MEDIF)</a></li>
						<li class="mb-1"><a href="#" class="link-none">Documentação para cão guia</a></li>
						<li class="mb-1"><a href="#" class="link-none">Documentação para acessórios</a></li>
					</ul>
				</div>
				<div class="col-3">
					<p class="text-grey mb-1"><strong>Suporte</strong></p>
					<ul class="list-flat">
						<li class="mb-1"><a href="#" class="link-none">Solicitar indenização</a></li>
						<li class="mb-1"><a href="#" class="link-none">Perguntas frequentes</a></li>
						<li class="mb-1"><a href="#" class="link-none">Ajuda</a></li>
						<li class="mb-1"><a href="#" class="link-none">Blog</a></li>
					</ul>
				</div>
			</div>
			<div class="row py-2" style="font-size: .75em">
				<div class="col-12 d-apart p-2 border-top">
					<div class="text-muted">© {{now()->year}} Todos os direitos reservados</div>
					<div class="text-muted"><a href="#" class="link-inherit">Termos & Condições</a> | <a href="#" class="link-inherit">Privacidade</a></div>
				</div>			
			</div>
		</div>
	</footer>
</section>