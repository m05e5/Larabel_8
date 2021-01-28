<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $facker = Faker::create();
        foreach(range(1,1000) as $index)
        {
            DB::table('users')->insert([
                'name'=>$facker->name,
                'email'=>$facker->email,
                'password'=>bcrypt('secret'),
            ]);
        }
        // \App\Models\User::factory(10)->create();
       // $this->call([
         //   PostTableSeeder::class,
      //  ]);
    }
}
