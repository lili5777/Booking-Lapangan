<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunPengguna extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'username_222142' => 'user1',  // Change this to a unique username
                'name_222142' => 'Akunuser',
                'email_222142' => 'user@gmail.com',
                'no_WA_222142' => '08978229375',
                'level_222142' => 'user',
                'password_222142' => Hash::make('123456'),
                'tgl_pendaftaran_222142' => '2024-10-15',
            ],
            [
                'username_222142' => 'admin',  // Already unique, no need to change
                'name_222142' => 'AkunAdmin',
                'email_222142' => 'admin@gmail.com',
                'no_WA_222142' => '08978229375',
                'level_222142' => 'admin',
                'password_222142' => Hash::make('123456'),
                'tgl_pendaftaran_222142' => '2024-10-15',
            ]
        ];

        foreach ($user as $value) {
            Pengguna::create($value);
        }
    }
}
