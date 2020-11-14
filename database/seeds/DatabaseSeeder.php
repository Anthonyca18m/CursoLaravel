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

        factory(User::class, 5)->create()->each(function ($user) {

            $profile = $user->profile()->save( factory(Profile::class)->make() );

            $profile->location()->save( factory(Location::class)->make() );

            $user->groups()->attach( $this->array(rand(1, 3)) );

            $user->profile->save( factory(Image::class)->make(
                ['url' => 'https://lorempixel.com/90/90/']
            ) );
        });
    }

    public function array($max)
    {
        $values = [];

        for ($i=0; $i < $max; $i++) {
            $values[] = $i;
        }

        return $values;
    }
}
