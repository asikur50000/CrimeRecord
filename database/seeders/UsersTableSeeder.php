<?php

namespace Database\Seeders;
use App\Models\User;
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
            'name'=>'Asikur Rahman',
            'role'=>'admin',
            'username'=>'Asik',
            'nid'=>'17103248',
            'age'=>'25',
            'address'=>'Motijheel-1000',
            'gender'=>'Male',
            'email'=>'asik@mail.com',
            'password'=>bcrypt('123')
            
        ]);
    }
}
