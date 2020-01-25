<?php

use Illuminate\Database\Seeder;
use App\LastName;

class LastNamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
        	['last_name' => 'Acosta',		'level' => 2],
        	['last_name' => 'Aguirre',		'level' => 3],
        	['last_name' => 'Alcaraz',		'level' => 1],
        	['last_name' => 'Aragon',		'level' => 1],
        	['last_name' => 'Araiza',		'level' => 2],
        	['last_name' => 'Aguilar',		'level' => 3],
        	['last_name' => 'Burgueño',		'level' => 2],
        	['last_name' => 'Bañuelos',		'level' => 1],
        	['last_name' => 'Barron',		'level' => 2],
        	['last_name' => 'Besares',		'level' => 1],
        	['last_name' => 'Carreon',		'level' => 2],
        	['last_name' => 'Carrillo',		'level' => 3],
        	['last_name' => 'Canizales',	'level' => 2],
        	['last_name' => 'Castillo',		'level' => 3],
        	['last_name' => 'Carranza',		'level' => 2],
        	['last_name' => 'Cortez',		'level' => 4],
        	['last_name' => 'Castro',		'level' => 2],
        	['last_name' => 'Cuevas',		'level' => 1],
        	['last_name' => 'Cruz',			'level' => 3],
        	['last_name' => 'Diaz',			'level' => 5],
        	['last_name' => 'Davalos',		'level' => 1],
        	['last_name' => 'Enciso',		'level' => 1],
        	['last_name' => 'Escobar',		'level' => 2],
        	['last_name' => 'Echeagaray',	'level' => 1],
        	['last_name' => 'Fernandez',	'level' => 5],
        	['last_name' => 'Gutierrez',	'level' => 5],
        	['last_name' => 'Gomez',		'level' => 5],
        	['last_name' => 'Gonzalez',		'level' => 5],
        	['last_name' => 'Guevara',		'level' => 2],
        	['last_name' => 'Garcia',		'level' => 4],
        	['last_name' => 'Garza',		'level' => 1],
        	['last_name' => 'Higuera',		'level' => 1],
        	['last_name' => 'Hernandez',	'level' => 5],
        	['last_name' => 'Herrera',		'level' => 4],
        	['last_name' => 'Hidalgo',		'level' => 1],
        	['last_name' => 'Ibarra',		'level' => 4],
        	['last_name' => 'Juarez',		'level' => 2],
        	['last_name' => 'Jaramillo',	'level' => 1],
        	['last_name' => 'Jimenez',		'level' => 5],
        	['last_name' => 'Lopez',		'level' => 5],
        	['last_name' => 'Lomeli',		'level' => 1],
        	['last_name' => 'Luna',			'level' => 2],
        	['last_name' => 'Lizarraga',	'level' => 5],
        	['last_name' => 'Larrañaga',	'level' => 1],
        	['last_name' => 'Morales',		'level' => 3],
        	['last_name' => 'Morelos',		'level' => 3],
        	['last_name' => 'Martinez',		'level' => 4],
        	['last_name' => 'Manriquez',	'level' => 2],
        	['last_name' => 'Muñoz',		'level' => 1],
        	['last_name' => 'Manjarrez',	'level' => 1],
        	['last_name' => 'Medina',		'level' => 1],
        	['last_name' => 'Osuna',		'level' => 5],
        	['last_name' => 'Oropeza',		'level' => 2],
        	['last_name' => 'Ortiz',		'level' => 3],
        	['last_name' => 'Ozorio',		'level' => 2],
        	['last_name' => 'Olivas',		'level' => 3],
        	['last_name' => 'Olivo',		'level' => 2],
        	['last_name' => 'Orozco',		'level' => 3],
        	['last_name' => 'Paez',			'level' => 2],
        	['last_name' => 'Padilla',		'level' => 3],
        	['last_name' => 'Pelaez',		'level' => 2],
        	['last_name' => 'Patron',		'level' => 1],
        	['last_name' => 'Quevedo',		'level' => 2],
        	['last_name' => 'Ramirez',		'level' => 5],
        	['last_name' => 'Ruiz',			'level' => 4],
        	['last_name' => 'Ruvalcaba',	'level' => 2],
        	['last_name' => 'Rodriguez',	'level' => 5],
        	['last_name' => 'Santana',		'level' => 1],
        	['last_name' => 'Sevilla',		'level' => 1],
        	['last_name' => 'Santamaria',	'level' => 1],
        	['last_name' => 'Trujillo',		'level' => 3],
        	['last_name' => 'Tavarez',		'level' => 1],
        	['last_name' => 'Treviño',		'level' => 1],
        	['last_name' => 'Toledo',		'level' => 1],
        	['last_name' => 'Valenzuela',	'level' => 4],
        	['last_name' => 'Velasco',		'level' => 3],
        	['last_name' => 'Villa',		'level' => 4],
        	['last_name' => 'Villalobos',	'level' => 1],
        	['last_name' => 'Vizcarra',		'level' => 2],
        	['last_name' => 'Vazquez',		'level' => 5],
        	['last_name' => 'Vega',			'level' => 3],
        	['last_name' => 'Zatarain',		'level' => 5],
        	['last_name' => 'Zavala',		'level' => 2],
        	['last_name' => 'Zapata',		'level' => 3],
        ];

        if (! count(LastName::all())) {
	        foreach ($list as $item) {
	        	LastName::create($item);
	        }
        }
    }
}
