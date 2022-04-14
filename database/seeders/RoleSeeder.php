<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['admin', 'reader', 'writer'];
        $n = count($data);
        for($i=0; $i<$n; $i++){
            $id = sprintf("%03s", $i);
            DB::table('roles')->insert([
                'id' => 'RL'.$id,
                'name_roles' => $data[$i],
                'status_roles' => 'aktif',
                'created_roles' => now(),
            ]);
        }
    }
}
