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
        $faker3 = Faker::create();
        $faker4 = Faker::create();
        $faker5 = Faker::create();
        $faker6 = Faker::create();
        $faker7 = Faker::create();
        $faker8 = Faker::create();
        $faker9 = Faker::create();
        $faker10 = Faker::create();

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

        $data3 = [
            'location'   => $faker3->localIpv4(),
            'pressure'   => $faker3->randomNumber(2, false),
            'heart_rate' => $faker3->randomNumber(2, false),
            'oxygen'     => $faker3->randomNumber(2, false),
            'device_id'  => $faker3->numberBetween(1,5)
        ];

        $data4 = [
            'location'   => $faker4->localIpv4(),
            'pressure'   => $faker4->randomNumber(2, false),
            'heart_rate' => $faker4->randomNumber(2, false),
            'oxygen'     => $faker4->randomNumber(2, false),
            'device_id'  => $faker4->numberBetween(1,5)
        ];

        $data5 = [
            'location'   => $faker5->localIpv4(),
            'pressure'   => $faker5->randomNumber(2, false),
            'heart_rate' => $faker5->randomNumber(2, false),
            'oxygen'     => $faker5->randomNumber(2, false),
            'device_id'  => $faker5->numberBetween(1,5)
        ];

        $data6 = [
            'location'   => $faker6->localIpv4(),
            'pressure'   => $faker6->randomNumber(2, false),
            'heart_rate' => $faker6->randomNumber(2, false),
            'oxygen'     => $faker6->randomNumber(2, false),
            'device_id'  => $faker6->numberBetween(1,5)
        ];

        $data2 = [
            'location'   => $faker7->localIpv4(),
            'pressure'   => $faker7->randomNumber(2, false),
            'heart_rate' => $faker7->randomNumber(2, false),
            'oxygen'     => $faker7->randomNumber(2, false),
            'device_id'  => $faker7->numberBetween(1,5)
        ];

        $data3 = [
            'location'   => $faker8->localIpv4(),
            'pressure'   => $faker8->randomNumber(2, false),
            'heart_rate' => $faker8->randomNumber(2, false),
            'oxygen'     => $faker8->randomNumber(2, false),
            'device_id'  => $faker8->numberBetween(1,5)
        ];

        $data4 = [
            'location'   => $faker9->localIpv4(),
            'pressure'   => $faker9->randomNumber(2, false),
            'heart_rate' => $faker9->randomNumber(2, false),
            'oxygen'     => $faker9->randomNumber(2, false),
            'device_id'  => $faker9->numberBetween(1,5)
        ];

        $data10 = [
            'location'   => $faker10->localIpv4(),
            'pressure'   => $faker10->randomNumber(2, false),
            'heart_rate' => $faker10->randomNumber(2, false),
            'oxygen'     => $faker10->randomNumber(2, false),
            'device_id'  => $faker10->numberBetween(1,5)
        ];
        
        $record = Record::create($data1);
        $record2 = Record::create($data2);
        $record3 = Record::create($data3);
        $record4 = Record::create($data4);
        $record5 = Record::create($data5);
        $record6 = Record::create($data5);
        $record7 = Record::create($data5);
        $record8 = Record::create($data5);
        $record9 = Record::create($data5);
        $record10 = Record::create($data5);
    }
}
