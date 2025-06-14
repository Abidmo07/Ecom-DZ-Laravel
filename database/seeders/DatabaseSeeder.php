<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'vendor']);

        $user=User::create([
            'name'=> 'ramzi-borz',
            'email'=> 'abidmo2003@gmail.com',
            'password'=> bcrypt('ramzi0508'),
        ]);
        $user->assignRole('admin');

    }
}
