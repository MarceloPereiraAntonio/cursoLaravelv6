<?php

use App\User;
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
       factory(User::class, 50)->create();
       
        /*User::create([
           'name'=> 'Marcelo Pereira Antonio',
           'email'=> 'marcelo.pereira@aula.com.br',
           'password'=> bcrypt(123456),
       ]);*/
    }
}
