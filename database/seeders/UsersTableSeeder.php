<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alexis vazquez',
            'email' => 'alexis@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
