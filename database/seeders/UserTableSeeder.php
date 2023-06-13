<?php

namespace Database\Seeders;
use App\Models\User;
use DB;


use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

use App\Traits\Uuid;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dekan',
            'email' => 'dekan@gmail.com',
            'password' => bcrypt('dekandekan'),
            'role' => 'Dekan'
        ]);

        User::create([
            'name' => 'Wakil Dekan 1',
            'email' => 'pd1@gmail.com',
            'password' => bcrypt('pd1'),
            'role' => 'PD1',
        ]);

        User::create([
            'name' => 'Wakil Dekan 2',
            'email' => 'pd2@gmail.com',
            'password' => bcrypt('pd2'),
            'role' => 'PD2',
        ]);

        User::create([
            'name' => 'Wakil Dekan 3',
            'email' => 'pd3@gmail.com',
            'password' => bcrypt('pd3'),
            'role' => 'PD3',
        ]);

        User::create([
            'name' => 'Koordinator Administrasi',
            'email' => 'kooradmin@gmail.com',
            'password' => bcrypt('kooradmin'),
            'role' => 'Kabag'
        ]);

        User::create([
            'name' => 'Umum',
            'email' => 'umum@gmail.com',
            'password' => bcrypt('umumumum'),
            'role' => 'Umum'
        ]);

        User::create([
            'name' => 'Sub Umum',
            'email' => 'subumum@gmail.com',
            'password' => bcrypt('subumum'),
            'role' => 'Sub-Umum'
        ]);

        User::create([
            'name' => 'Pendidikan',
            'email' => 'pendidikan@gmail.com',
            'password' => bcrypt('pendidikan'),
            'role' => 'Pendidikan'
        ]);

        User::create([
            'name' => 'Kemahasiswaan',
            'email' => 'kemahasiswaan@gmail.com',
            'password' => bcrypt('kemahasiswaan'),
            'role' => 'Kemahasiswaan'
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'Admin'
        ]);

    }
}
