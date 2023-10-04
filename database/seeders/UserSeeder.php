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
        User::Create([
            'name'=>'admin',
            'email'=>'alfa@gmail.com',
            'password'=>bcrypt('123')
        ]);
        User::Create([
            'name'=>'staff',
            'email'=>'alfari@gmail.com',
            'password'=>bcrypt('1234')
        ]);
    }
}
