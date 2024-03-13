<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order_status = [
            [
                'name'           => 'Aprroved',
                'created_at'        => date('Y-n-d h:i:s'),
                'updated_at'        => date('Y-n-d h:i:s')
            ],
            [
                'name'           => 'Aprroved',
                'created_at'        => date('Y-n-d h:i:s'),
                'updated_at'        => date('Y-n-d h:i:s')
            ],

            [
                'name'           => 'Aprroved',
                'created_at'        => date('Y-n-d h:i:s'),
                'updated_at'        => date('Y-n-d h:i:s')
            ],
            [
                'name'           => 'Aprroved',
                'created_at'        => date('Y-n-d h:i:s'),
                'updated_at'        => date('Y-n-d h:i:s')
            ]

        ];
        OrderStatus::insert($order_status);
    }
}
