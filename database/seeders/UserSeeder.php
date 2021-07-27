<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // perusahaan
        $perusahaan1 = User::create([
            'name'  => 'Novel',
            'role'  => 'perusahaan',
            'email' => 'novelpharm@gmail.com',
            'password'  => bcrypt('novelpharm123')
        ]);
        $perusahaan1->assignRole('perusahaan');

        // pelamar
        $pelamar1 = User::create([
            'name'  => 'Wahyu Alif',
            'role'  => 'pelamar',
            'email' => 'wahyualief1@gmail.com',
            'password'  => bcrypt('wahyu123')
        ]);
        $pelamar1->assignRole('pelamar');

        // admin
        $admin1 = User::create([
            'name'  => 'admin',
            'role'  => 'admin',
            'email' => 'admin@gmail.com',
            'password'  => bcrypt('admin123')
        ]);
        $admin1->assignRole('admin');
    }
}
