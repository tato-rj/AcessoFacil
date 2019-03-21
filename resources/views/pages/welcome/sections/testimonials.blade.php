<section class="py-5 overflow-hidden mb-8">
	<h4 class="mb-5 text-center">O que dizem os nossos clientes</h4>

	@include('components.testimonials', [
		'testimonials' => [
			[
				'title' => 'Super recomendo!',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eleifend rutrum erat, vel venenatis.',
				'author' => 'João da Silva'
			],
			[
				'title' => 'Ótimo atendimento e serviço',
				'content' => 'Qui officia deserunt mollit anim id est laborum. Ut labore et dolore magna aliqua.',
				'author' => 'Marina Nogueira'
			],
			[
				'title' => 'A experiência foi muito positiva',
				'content' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.',
				'author' => 'Jorge Carvalho de Neto'
			],
			[
				'title' => 'Gostei muito do trabalho realizado',
				'content' => 'Faucibus turpis in eu mi bibendum neque egestas. Convallis a cras semper auctor neque vitae tempus quam.',
				'author' => 'José Ramos'
			],
			[
				'title' => 'Valeu!',
				'content' => 'Nisl tincidunt eget nullam non. Ullamcorper sit amet risus nullam eget felis eget nunc. Elementum integer enim neque volutpat ac tincidunt.',
				'author' => 'Juliana Ferreira'
			]
		]
	])

</section>