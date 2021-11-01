<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\JobSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            JobSeeder::class
        ]);
    }
}

