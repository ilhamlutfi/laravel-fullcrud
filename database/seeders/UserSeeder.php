<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          => 'Ilham Lutfi',
            'email'         => 'ilhamlutfi153@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password'      => bcrypt('password'),
            'created_at'    => date('Y-m-d H:i:s', time()),
            'updated_at'    => date('Y-m-d H:i:s', time())
        ]);
    }
}
