<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Siswaseeder extends Seeder
{
    public function run()
    {
        $data_siswa =[
        [
            'nama'=> 'alief wafiudin',
            'kelas'=> 'XI PPLG',
            'umur'=> random_int(15,30),
        ],
        [
            'nama'=> 'anggara prima',
            'kelas'=> 'XI PPLG',
            'umur'=> random_int(15,30),
        ],
        [
            'nama'=> 'neni destiani',
            'kelas'=> 'XI PPLG',
            'umur'=> random_int(15,30),
        ],

        ];

            DB::table('siswa')->truncate();
            
            foreach ($data_siswa as $data) {
                DB::table('siswa')->insert([
                    'nama' => $data['nama'],
                    'kelas' => $data['kelas'],
                    'umur' => $data['umur'],

                ]);
            }
            $siswa = DB::table('siswa')->get();
            dd($siswa);
        }
    }
        
        
