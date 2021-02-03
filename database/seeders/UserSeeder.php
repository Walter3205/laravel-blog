<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Walter Alfonso Soriano',
            'email' => 'walter123asg@gmail.com',
            'password' => bcrypt('123')
        ]);
        
        User::factory(9)->create(); 
    }
}
