<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail_user = [
            [
                'user_id'           => 1,
                'photo'             => '',
                'role'              => 'Website Developer',
                'contact_number'    => '083191077444',
                'biography'         => '',
                'created_at'        => date('Y-n-d h:i:s'),
                'updated_at'        => date('Y-n-d h:i:s')
            ],
            [
                'user_id'           => 2,
                'photo'             => '',
                'role'              => 'Mobile Developer',
                'contact_number'    => '089620032110',
                'biography'         => '',
                'created_at'        => date('Y-n-d h:i:s'),
                'updated_at'        => date('Y-n-d h:i:s')
            ],
        ];
        DetailUser::insert($detail_user);
    }
}
