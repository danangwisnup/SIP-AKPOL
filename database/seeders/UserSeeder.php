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

        $type = 'USR';
        $uuid = Str::uuid()->toString();
        $uuid_second = substr($uuid, 9, 4);
        $uuid_third = substr($uuid, 14, 4);
        $uuid_fourth = substr($uuid, 19, 4);
        $uuid_fifth = substr($uuid, 24, 12);
        $no = str_pad(User::whereDate('created_at', date('Y-m-d'))->count() + 1, 7, '0', STR_PAD_LEFT);
        $uid = $type . '.' . $uuid_fifth . $uuid_second . $uuid_third . $uuid_fourth . '.' . $no;

        DB::table('users')->insert([
            'uuid' => 'USR.6677e7359c2f075b4dba83c3.0000001',
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@localhost.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);
    }
}
