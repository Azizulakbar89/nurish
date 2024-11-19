<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     DB::table('users')->insert([
    //         'username'	=> 'sdnurish',
    //         'password'	=> Hash::make('adminnurish')
    // ]);
    User::create([
        'username' => 'adminsdnurish2010',
        'password' => bcrypt('nurish2010')
    ]);
    }
}
