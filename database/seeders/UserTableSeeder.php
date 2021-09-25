<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <=10; $i++){
            User::create([
                'name'           =>'TEST' .$i,
                'email'          =>'test' .$i .'@test.com',
                'password'       =>Hash::make('12345678'),
                'created_at'     =>now(),
                'updated_at'     =>now()
            ]);
        }
    }
}
