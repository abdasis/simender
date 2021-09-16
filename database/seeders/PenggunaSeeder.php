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
           'name' => 'Polres Tegal',
           'email' => 'id.polrestegal@gmail.com',
           'password' => \Hash::make('(randomuser123)')
        ]);
    }
}
