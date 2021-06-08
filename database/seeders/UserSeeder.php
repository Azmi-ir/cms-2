<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            'name' => 'Super Admin',
            'email' => 'superadmin@email.com',
            'level' => 'super-admin',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert(
        [
            'name' => 'Admin2',
            'email' => 'admin2@email.com',
            'level' => 'admin',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert(
        [
            'name' => 'Operator2',
            'email' => 'operator2@email.com',
            'level' => 'operator',
            'password' => bcrypt('password'),
        ]);
    }
}
