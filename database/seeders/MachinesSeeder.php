<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MachinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('machines')->insert([
            [
                'machine_name' => 'เครื่องยกของ A',
                'machine_type' => 'ประเภทเครื่องยกของ',
                'last_maintenance' => '2023-10-01',
                'status' => 'ปกติ',
                'maintenance_cycle' => '30วัน',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'machine_name' => 'เครื่องบรรจุ B',
                'machine_type' => 'ประเภทเครื่องบรรจุ',
                'last_maintenance' => '2023-09-15',
                'status' => 'ต้องซ่อม',
                'maintenance_cycle' => '60วัน',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'machine_name' => 'เครื่องตัด C',
                'machine_type' => 'ประเภทเครื่องตัด',
                'last_maintenance' => '2023-08-20',
                'status' => 'ปกติ',
                'maintenance_cycle' => '15วัน',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
