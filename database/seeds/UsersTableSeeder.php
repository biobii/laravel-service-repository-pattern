<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Example User';
        $user->email = 'example@app.com';
        $user->password = Hash::make('secret');
        $user->save();
        
        $second = new User();
        $second->name = 'Second User';
        $second->email = 'second@app.com';
        $second->password = Hash::make('secret');
        $second->save();
    }
}
