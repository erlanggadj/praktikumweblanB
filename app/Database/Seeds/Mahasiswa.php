<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051020',
                'nama'    => 'Erlangga Dwi J',
                'alamat'    => 'Natar',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2017051021',
                'nama'    => 'Deny Aldy',
                'alamat'    => 'Way Kanan',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2017051022',
                'nama'    => 'Fami Bastari',
                'alamat'    => 'Teluk',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2017051023',
                'nama'    => 'Abia Bagas',
                'alamat'    => 'Kedondong',
                'created_at'    => Time::now(),
            ]
        ];

 
        // Using Query Builder
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
        
    }
}
