<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'full_name'   =>   'Wellington Chanda',
            'slug'  => 'administrator',
            'email'    =>   'admin@admin.com',
            'date_of_birth' => '1991-02-19',
            'phone_number' =>   '0969525359',
            'active'   =>   1,
            'role' => 'admin',
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(10),
        ]);
    }
}
