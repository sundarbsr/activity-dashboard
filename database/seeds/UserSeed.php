<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'sundar',
            'email' => 'sundar@gmail.com',
            'password' => bcrypt('sundar')
        ]);
        $user->assignRole('administrator');

    }
}