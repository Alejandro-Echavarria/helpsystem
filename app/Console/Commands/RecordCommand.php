<?php

namespace App\Console\Commands;

use App\Models\Record;
use Illuminate\Console\Command;
use Faker\Factory as Faker;

class RecordCommand extends Command
{
    protected $signature = 'record:create';
    protected $description = 'Create a new record inside the database';

    public function handle()
    {
        $faker = Faker::create();
        $faker2 = Faker::create();

        $data1 = [
            'location'   => $faker->localIpv4(),
            'pressure'   => $faker->randomNumber(2, false),
            'heart_rate' => $faker->randomNumber(2, false),
            'oxygen'     => $faker->randomNumber(2, false),
            'device_id'  => $faker->numberBetween(1,5)
        ];

        $data2 = [
            'location'   => $faker2->localIpv4(),
            'pressure'   => $faker2->randomNumber(2, false),
            'heart_rate' => $faker2->randomNumber(2, false),
            'oxygen'     => $faker2->randomNumber(2, false),
            'device_id'  => $faker2->numberBetween(1,5)
        ];
        
        $record = Record::create($data1);
        $record2 = Record::create($data2);
    }
}
