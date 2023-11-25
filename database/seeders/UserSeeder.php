<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ([
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@localhost.com',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ], [
                'name' => 'Danton 1',
                'username' => 'Danton 1',
                'email' => 'danton1@localhost.com',
                'password' => bcrypt('danton1'),
                'role' => 'danton',
            ]
        ]);

        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}
