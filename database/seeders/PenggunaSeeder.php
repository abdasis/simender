<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Abd. Asis',
           'email' => 'id.abdasis@gmail.com',
           'password' => \Hash::make('rahasia123')
        ]);
    }
}
