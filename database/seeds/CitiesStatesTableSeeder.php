<?php

use Illuminate\Database\Seeder;
use App\State;
use App\City;

class CitiesStatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            [
                'name'   => 'Baja California Sur',
                'cities' => [
                    ['name' => 'La Paz',   'level' => 1],
                    ['name' => 'La Cabos', 'level' => 1],
                ]
            ],[
                'name'   => 'Sonora',
                'cities' => [
                    ['name' => 'Hermosillo',  'level' => 3],
                    ['name' => 'Navojoa',     'level' => 2],
                    ['name' => 'Cd. Obregon', 'level' => 3],
                    ['name' => 'Guaymas',     'level' => 2],
                ]
            ],[
                'name'   => 'Durango',
                'cities' => [
                    ['name' => 'Durango',  'level' => 2],
                ]
            ],[
                'name'   => 'Sinaloa',
                'cities' => [
                    ['name' => 'Mazatlán',    'level' => 5],
                    ['name' => 'Culiacán',    'level' => 4],
                    ['name' => 'Los Mochis',  'level' => 4],
                    ['name' => 'Guasave',     'level' => 3],
                    ['name' => 'San Ignacio', 'level' => 2],
                    ['name' => 'Rosario',     'level' => 3],
                    ['name' => 'Escuinapa',   'level' => 2],
                ]
            ],[
                'name'   => 'Nayarit',
                'cities' => [
                    ['name' => 'Tepic',    'level' => 3],
                    ['name' => 'San Blas', 'level' => 1],
                    ['name' => 'Tuxpan',   'level' => 1],
                ]
            ],[
                'name'   => 'Jalisco',
                'cities' => [
                    ['name' => 'Guadalajara',     'level' => 4],
                    ['name' => 'Puerto Vallarta', 'level' => 2],
                ]
            ],
        ];

        if (! count(State::all())) {
            foreach ($list as $item_state) {
                $state = State::create([
                    'name' => $item_state['name']
                ]);

                foreach ($item_state['cities'] as $item_city) {
                    City::create([
                        'name'  => $item_city['name'],
                        'level' => $item_city['level'],
                        'state_id' => $state->id,
                    ]);
                }
            }
        }
    }
}
