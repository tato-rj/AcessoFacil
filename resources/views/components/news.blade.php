<section class="py-5 container">
	<h4 class="text-center">Notícias online</h4>
	<div class="row">
		@foreach($news as $article)
		<div class="col-4 p-4">
			<a class="embedly-card" data-card-controls="0" href="{{$article->url}}">
				<div class="w-100 bg-light mb-3" style="height: 160px"></div>
				<div class="w-100 bg-light mb-3" style="height: 25px"></div>
				<div class="w-100 bg-light mb-3" style="height: 25px"></div>
				<div class="bg-light mb-3" style="height: 25px; width: 50%"></div>
			</a>
		</div>
		@endforeach
	</div>
</section>