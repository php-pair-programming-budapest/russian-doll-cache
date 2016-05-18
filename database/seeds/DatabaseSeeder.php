<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();

        factory(App\User::class, 50)->create()->each(function($u) {
            $u->address()->save(factory(App\Address::class)->make());
        });
    }
}
