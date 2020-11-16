<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\User:: create([
            'name' => 'Kirby',
            'email' => 'monoe@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
