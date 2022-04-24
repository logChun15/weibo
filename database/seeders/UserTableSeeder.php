<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(50)->create();

        $user = User::find(1);
        $user->name = 'logchun';
        $user->email = 'logchun@mail.com';
        $user->is_admin = true;
        $user->save();
    }
}