<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [

                'nama' => 'Satria Kurniawan',
                'divisi_id' => 1,
                'nohp' => '082254388310',
                'email' => 'satirakurniawan@gmail.com',
                'username' => 'satria',
                'password' => bcrypt('1234'),
                'level' => 'admin',
                'alamat' => 'Jl. Karya Bersama, RT.19'
            ],
            [

                'nama' => 'Ali Zainal',
                'divisi_id' => 2,
                'nohp' => '085392888300',
                'email' => 'alizayn@gmail.com',
                'username' => 'ali',
                'password' => bcrypt('qwerty'),
                'level' => 'user',
                'alamat' => 'Jl. Karantika, RT.01'
            ],
            [

                'nama' => 'Agung Budi',
                'divisi_id' => 3,
                'nohp' => '0833222333450',
                'email' => 'agungbud@gmail.com',
                'username' => 'agung',
                'password' => bcrypt('zxcv'),
                'level' => 'user',
                'alamat' => 'Jl. Karang Bersama, RT.61'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
