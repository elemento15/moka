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
                    ['name' => 'La Paz',   'level' => 1, 'phone_code' => '612'],
                    ['name' => 'La Cabos', 'level' => 1, 'phone_code' => '624'],
                ]
            ],[
                'name'   => 'Sonora',
                'cities' => [
                    ['name' => 'Hermosillo',  'level' => 3, 'phone_code' => '662'],
                    ['name' => 'Navojoa',     'level' => 2, 'phone_code' => '642'],
                    ['name' => 'Cd. Obregon', 'level' => 3, 'phone_code' => '644'],
                    ['name' => 'Guaymas',     'level' => 2, 'phone_code' => '622'],
                ]
            ],[
                'name'   => 'Durango',
                'cities' => [
                    ['name' => 'Durango',  'level' => 2, 'phone_code' => '618'],
                ]
            ],[
                'name'   => 'Sinaloa',
                'cities' => [
                    ['name' => 'Mazatlán',    'level' => 5, 'phone_code' => '669'],
                    ['name' => 'Culiacán',    'level' => 4, 'phone_code' => '667'],
                    ['name' => 'Los Mochis',  'level' => 4, 'phone_code' => '668'],
                    ['name' => 'Guasave',     'level' => 3, 'phone_code' => '687'],
                    ['name' => 'San Ignacio', 'level' => 2, 'phone_code' => '696'],
                    ['name' => 'Rosario',     'level' => 3, 'phone_code' => '694'],
                    ['name' => 'Escuinapa',   'level' => 2, 'phone_code' => '695'],
                ]
            ],[
                'name'   => 'Nayarit',
                'cities' => [
                    ['name' => 'Tepic',    'level' => 3, 'phone_code' => '311'],
                    ['name' => 'San Blas', 'level' => 1, 'phone_code' => '323'],
                    ['name' => 'Tuxpan',   'level' => 1, 'phone_code' => '319'],
                ]
            ],[
                'name'   => 'Jalisco',
                'cities' => [
                    ['name' => 'Guadalajara',     'level' => 4, 'phone_code' => '33'],
                    ['name' => 'Puerto Vallarta', 'level' => 2, 'phone_code' => '322'],
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
                        'name'       => $item_city['name'],
                        'level'      => $item_city['level'],
                        'phone_code' => $item_city['phone_code'],
                        'state_id'   => $state->id,
                    ]);
                }
            }
        }
    }
}
