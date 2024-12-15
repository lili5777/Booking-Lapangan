<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username' => 'user1',  // Change this to a unique username
                'name' => 'Akunuser',
                'email' => 'user@gmail.com',
                'no_WA' => '08978229375',
                'level' => 'user',
                'password' => Hash::make('123456'),
                'tgl_pendaftaran' => '2024-10-15',
            ],
            [
                'username' => 'admin',  // Already unique, no need to change
                'name' => 'AkunAdmin',
                'email' => 'admin@gmail.com',
                'no_WA' => '08978229375',
                'level' => 'admin',
                'password' => Hash::make('123456'),
                'tgl_pendaftaran' => '2024-10-15',
            ]
        ];

        foreach ($user as $value) {
            User::create($value);
        }
    }
}
