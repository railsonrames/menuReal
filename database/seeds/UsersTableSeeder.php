<?php

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
/*        $user = new \App\User();
        $user->create([
            'name' => 'Railson Ramés Sousa',
            'email' => 'railson.rames@gmail.com',
            'password' => bcrypt('12345678')
        ]);*/
        factory(App\User::class, 30)->create();
    }
}
