<?php

namespace App\Database\Seeds;
use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder_12200120 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Dini Sapika',
                'password'  => md5('12200120')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200120',
                'password'  => md5('dinisapika')
            ],

        ];
        $p = new pengguna();
        $p->insertBatch($data);
    }
}
