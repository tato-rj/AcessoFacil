<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	News::create([
        		'title' => 'Avianca e Azul terão que informar a clientes sobre remarcação de passagens sem custo', 
        		'url' => 'https://oglobo.globo.com/economia/defesa-do-consumidor/avianca-azul-terao-que-informar-clientes-sobre-remarcacao-de-passagens-sem-custo-23570599?utm_source=Facebook&utm_medium=Social&utm_campaign=O%20Globo']);

        	News::create([
        		'title' => 'Como viajar com Animais de Assistência Emocional?', 
        		'url' => 'https://blog.maxmilhas.com.br/dicas-de-viagem/como-viajar-com-animais-de-assistencia-emocional']);

        	News::create([
        		'title' => 'Avianca vai acabar com operação no Galeão em abril. Passageiro poderá ser reembolsado', 
        		'url' => 'https://oglobo.globo.com/economia/avianca-vai-acabar-com-operacao-no-galeao-em-abril-passageiro-podera-ser-reembolsado-23551244?versao=amp']);

        	News::create([
        		'title' => 'Animais de apoio emocional: nos Estados Unidos, até porcos voam', 
        		'url' => 'https://viagemeturismo.abril.com.br/materias/animais-de-apoio-emocional-nos-eua-ate-porcos-voam/']);

        	News::create([
        		'title' => 'Professor diz ter sido barrado em voo porque não informou ser cadeirante', 
        		'url' => 'http://voenews.com.br/destaque/professor-diz-ter-sido-barrado-em-voo-porque-nao-informou-ser-cadeirante/']);

        	News::create([
        		'title' => 'http://g1.globo.com/sao-paulo/noticia/2015/06/gol-e-infraero-sao-punidas-por-cadeirante-se-arrastar-em-embarque.html', 
        		'url' => 'http://g1.globo.com/sao-paulo/noticia/2015/06/gol-e-infraero-sao-punidas-por-cadeirante-se-arrastar-em-embarque.html']);

        	News::create([
        		'title' => 'Surfista não consegue embarcar com cão-guia no Aeroporto de Vitória', 
        		'url' => 'https://www.gazetaonline.com.br/cbn_vitoria/reportagens/2018/11/surfista-nao-consegue-embarcar-com-cao-guia-no-aeroporto-de-vitoria-1014156768.html']);
    }
}
