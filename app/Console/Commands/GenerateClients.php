<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\FirstName;
use App\LastName;
use App\Client;

class GenerateClients extends Command
{
    const MALE_PERCENT = 0.8;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:clients';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate list of clients';

    /**
      * Collections for models
      */
    private $first_names, $last_names;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $num = $this->ask('How many clients? ');
        $i = 1;

        $this->setCollections();

        $bar = $this->output->createProgressBar($num);

        $bar->setBarCharacter('#');
        $bar->setEmptyBarCharacter('-');
        $bar->setProgressCharacter('|');

        $bar->start();

        while ($i <= $num) {
            $this->generateClient();
            $i++;
            $bar->advance();
        }

        $bar->finish();
        $this->comment("\n");
    }

    private function setCollections()
    {
        $this->first_names = $this->setCollectionModel( FirstName::select('name','gender','level')->get() );
        $this->last_names = $this->setCollectionModel( LastName::select('last_name','level')->get() );
    }

    private function setCollectionModel($collection)
    {
        $data = collect();
        foreach ($collection as $item) {
            for ($i=0; $i < $item->level; $i++) { 
                $data->push($item);
            }
        }
        return $data;
    }

    private function generateClient()
    {
        $gender = $this->generateGender();

        $data = [
            'first_name' => $this->generateFirstName($gender),
            'last_name'  => $this->generateLastName() .' '.$this->generateLastName(),
            'gender'     => $gender,
            'age'        => $this->generateAge(),
            'city_state' => '',
            'phone'      => '',
        ];

        Client::create($data);
    }

    private function generateGender()
    {
        // 0-80 = H | 81-100 = M
        return (rand(1,100) <= self::MALE_PERCENT * 100) ? 'H' : 'M'; 
    }

    private function generateFirstName($gender)
    {
        $filtered = $this->first_names->where('gender', $gender);
        $name = $filtered->random(1)->first();
        return $name->name;
    }

    private function generateLastName()
    {
        $record = $this->last_names->random(1)->first();
        return $record->last_name;
    }

    private function generateAge()
    {
        return rand(18, 50);
    }
}
