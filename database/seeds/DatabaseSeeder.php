<?php

use App\Models\Group;
use App\Models\Level;
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
        // $this->call(UserSeeder::class);

        factory(Group::class, 3)->create();

        factory(Level::class)->create(['name' => 'Oro']);
        factory(Level::class)->create(['name' => 'Placa']);
        factory(Level::class)->create(['name' => 'Bronce']);
    }
}
