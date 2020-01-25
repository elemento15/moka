<?php

use Illuminate\Database\Seeder;
use App\FirstName;

class FirstNamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
        	['name' => 'Angel',		'gender' => 'H', 'level' => 3],
        	['name' => 'Alberto',	'gender' => 'H', 'level' => 3],
        	['name' => 'Alfredo',	'gender' => 'H', 'level' => 3],
        	['name' => 'Agustin',	'gender' => 'H', 'level' => 2],
        	['name' => 'Adalberto', 'gender' => 'H', 'level' => 1],
        	['name' => 'Adan',		'gender' => 'H', 'level' => 1],
        	['name' => 'Carlos',	'gender' => 'H', 'level' => 3],
        	['name' => 'Cesar',		'gender' => 'H', 'level' => 3],
        	['name' => 'Ernesto',	'gender' => 'H', 'level' => 2],
        	['name' => 'Eduardo',	'gender' => 'H', 'level' => 3],
        	['name' => 'Edgar',		'gender' => 'H', 'level' => 1],
        	['name' => 'Esteban',	'gender' => 'H', 'level' => 2],
        	['name' => 'Francisco',	'gender' => 'H', 'level' => 3],
        	['name' => 'Fernando',	'gender' => 'H', 'level' => 3],
        	['name' => 'Facundo',	'gender' => 'H', 'level' => 1],
        	['name' => 'Federico',	'gender' => 'H', 'level' => 1],
        	['name' => 'Fabricio',	'gender' => 'H', 'level' => 1],
        	['name' => 'German',	'gender' => 'H', 'level' => 2],
        	['name' => 'Guillermo',	'gender' => 'H', 'level' => 3],
        	['name' => 'Gerardo',	'gender' => 'H', 'level' => 3],
        	['name' => 'Gilberto',	'gender' => 'H', 'level' => 1],
        	['name' => 'Hilario',	'gender' => 'H', 'level' => 1],
        	['name' => 'Heleodoro',	'gender' => 'H', 'level' => 1],
        	['name' => 'Hugo',		'gender' => 'H', 'level' => 2],
        	['name' => 'Humberto',	'gender' => 'H', 'level' => 2],
        	['name' => 'Irving',	'gender' => 'H', 'level' => 1],
        	['name' => 'Javier',	'gender' => 'H', 'level' => 3],
        	['name' => 'Justo',		'gender' => 'H', 'level' => 1],
        	['name' => 'Julian',	'gender' => 'H', 'level' => 2],
        	['name' => 'Jorge',		'gender' => 'H', 'level' => 3],
        	['name' => 'Joaquin',	'gender' => 'H', 'level' => 2],
        	['name' => 'Juan Jose',	'gender' => 'H', 'level' => 4],
        	['name' => 'Julio',		'gender' => 'H', 'level' => 2],
        	['name' => 'Luis',		'gender' => 'H', 'level' => 2],
        	['name' => 'Leopoldo',	'gender' => 'H', 'level' => 1],
        	['name' => 'Leonardo',	'gender' => 'H', 'level' => 2],
        	['name' => 'Miguel',	'gender' => 'H', 'level' => 2],
        	['name' => 'Mauricio',	'gender' => 'H', 'level' => 1],
        	['name' => 'Martin',	'gender' => 'H', 'level' => 2],
        	['name' => 'Manuel',	'gender' => 'H', 'level' => 3],
        	['name' => 'Norberto',	'gender' => 'H', 'level' => 1],
        	['name' => 'Omar',		'gender' => 'H', 'level' => 2],
        	['name' => 'Oscar',		'gender' => 'H', 'level' => 2],
        	['name' => 'Oliver',	'gender' => 'H', 'level' => 1],
        	['name' => 'Pedro',		'gender' => 'H', 'level' => 2],
        	['name' => 'Patricio',	'gender' => 'H', 'level' => 1],
        	['name' => 'Roberto',	'gender' => 'H', 'level' => 3],
        	['name' => 'Raul',		'gender' => 'H', 'level' => 3],
        	['name' => 'Santiago',	'gender' => 'H', 'level' => 2],
        	['name' => 'Saul',		'gender' => 'H', 'level' => 2],
        	['name' => 'Simon',		'gender' => 'H', 'level' => 1],
        	['name' => 'Sebastian',	'gender' => 'H', 'level' => 2],
        	['name' => 'Sergio',	'gender' => 'H', 'level' => 3],
        	['name' => 'Ulises',	'gender' => 'H', 'level' => 1],
        	['name' => 'Victor',	'gender' => 'H', 'level' => 2],

        	['name' => 'Ana Maria',	'gender' => 'M', 'level' => 3],
        	['name' => 'Aurora',	'gender' => 'M', 'level' => 2],
        	['name' => 'Alicia',	'gender' => 'M', 'level' => 2],
        	['name' => 'Alejandra',	'gender' => 'M', 'level' => 3],
        	['name' => 'Artemisa',	'gender' => 'M', 'level' => 1],
        	['name' => 'Carmen',	'gender' => 'M', 'level' => 2],
        	['name' => 'Carolina',	'gender' => 'M', 'level' => 2],
        	['name' => 'Concepcion','gender' => 'M', 'level' => 1],
        	['name' => 'Damaris',	'gender' => 'M', 'level' => 1],
        	['name' => 'Fernanda',	'gender' => 'M', 'level' => 3],
        	['name' => 'Gardenia',	'gender' => 'M', 'level' => 1],
        	['name' => 'Herlinda',	'gender' => 'M', 'level' => 1],
        	['name' => 'Ines',		'gender' => 'M', 'level' => 1],
        	['name' => 'Jenifer',	'gender' => 'M', 'level' => 1],
        	['name' => 'Karla',		'gender' => 'M', 'level' => 3],
        	['name' => 'Lizeth',	'gender' => 'M', 'level' => 2],
        	['name' => 'Mirna',		'gender' => 'M', 'level' => 1],
        	['name' => 'Maribel',	'gender' => 'M', 'level' => 2],
        	['name' => 'Martha',	'gender' => 'M', 'level' => 2],
        	['name' => 'Nereyda',	'gender' => 'M', 'level' => 1],
        	['name' => 'Olivia',	'gender' => 'M', 'level' => 2],
        	['name' => 'Patricia',	'gender' => 'M', 'level' => 3],
        	['name' => 'Perla',		'gender' => 'M', 'level' => 2],
        	['name' => 'Rocio',		'gender' => 'M', 'level' => 1],
        	['name' => 'Susana',	'gender' => 'M', 'level' => 2],
        	['name' => 'Sarahi',	'gender' => 'M', 'level' => 2],
        	['name' => 'Tamara',	'gender' => 'M', 'level' => 1],
        	['name' => 'Victoria',	'gender' => 'M', 'level' => 3],
        	['name' => 'Valeria',	'gender' => 'M', 'level' => 3],
        	['name' => 'Valeria',	'gender' => 'M', 'level' => 3],
        	['name' => 'Xiomara',	'gender' => 'M', 'level' => 1],
        ];

        if (! count(FirstName::all())) {
	        foreach ($list as $item) {
	        	FirstName::create($item);
	        }
        }

    }
}
