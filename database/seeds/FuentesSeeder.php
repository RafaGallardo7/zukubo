<?php

use Illuminate\Database\Seeder;
use App\Models\Fuente;

class FuentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la Tabla
        // Ciudad::truncate();	  
        
        $fuentes = [
            [	    	
	    		'id' => '1', 
	    		'nombre' => 'El Universo',   
				'dominio' => 'eluniverso.com',   
				'descripcion' => 'Noticias de Ecuador y del mundo en El Universo. Revisa en vivo las principales noticias de Ecuador, encuentra noticias nacionales e internacionales, de opinión, política, economía, deportes, entretenimiento, Guayaquil, Quito y Cuenca.',   
				'slogan' => 'El Universo | Noticias de Ecuador y del mundo',   
				'pais' => 'Ecuador',   
				'pais_id' => 1,   
				'logo' => '/images/logos_fuentes/el_universo.jpg',   
				'favicon' => '/images/favicons_fuentes/el_universo.ico',   
				'imagen1' => ''  	    		
	    	],
            [	    
				'id' => '2', 	
	    		'nombre' => 'Ecuaviza',   
				'dominio' => 'ecuavisa.com',   
				'descripcion' => 'El mejor canal de televisión del Ecuador. Noticias, Política, Actualidad, Deportes, Fútbol, Entretenimiento, Tecnología, Salud. Videos, fotos y galerías.',   
				'slogan' => 'Noticias del Ecuador y del mundo Noticiero en vivo. TV',   
				'pais' => 'Ecuador',   
				'pais_id' => 1,   
				'logo' => '/images/logos_fuentes/ecuaviza.png',   
				'favicon' => '/images/favicons_fuentes/ecuaviza.png',   
				'imagen1' => ''  	    		
	    	],
	    	[
	    		'id' => '3', 
	    		'nombre' => 'Teleamazonas',   
				'dominio' => 'teleamazonas.com',   
				'descripcion' => 'Teleamazonas: Noticias de Ecuador y el Mundo al instante. Deportes, actualidad, farándula, vídeos, entretenimiento, virales, ciencia y tecnología, cine.',   
				'slogan' => 'Teleamazonas - Sitio Web Oficial - Noticias de Ecuador y el Mundo',   
				'pais' => 'Ecuador',   
				'pais_id' => 1,   
				'logo' => '/images/logos_fuentes/teleamazonas.png',  
				'favicon' => '/images/favicons_fuentes/teleamazonas.png',    
				'imagen1' => ''  	    		
  		
	    	],
	    	// [
	    	// 	'id' => '4', 
	    	// 	'nombre' => 'Ecuaviza4',   
			// 	'dominio' => 'eluniverso.com',   
			// 	'descripcion' => '',   
			// 	'slogan' => '',   
			// 	'pais' => 'Ecuador',   
			// 	'pais_id' => 1,   
			// 	'logo' => '/images/logos_fuentes/ecuaviza.jpg',  
			// 	'favicon' => '/images/favicons_fuentes/el_universo.jpg',    
			// 	'imagen1' => ''  	    		
	    		
            // ],	    	
	    	// [
	    	// 	'id' => '5', 
	    	// 	'nombre' => 'Ecuaviza5',   
			// 	'dominio' => 'eluniverso.com',   
			// 	'descripcion' => '',   
			// 	'slogan' => '',   
			// 	'pais' => 'Ecuador',   
			// 	'pais_id' => 1,   
			// 	'logo' => '/images/logos_fuentes/ecuaviza.jpg',   
			// 	'favicon' => '/images/favicons_fuentes/el_universo.jpg',   
			// 	'imagen1' => ''  	    		
    		
            // ]
	    ];

	    foreach($fuentes as $fuente){
		    Fuente::create($fuente);
		}
    }
}
