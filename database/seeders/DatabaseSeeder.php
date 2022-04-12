<?php

namespace Database\Seeders;

use App\Models\User;
use App\Helpers\Jotter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=3; $i++){
            if($i==1) {
                $role = "admin";
            } elseif ($i==2){
                $role = "reader";
            } else {
                $role = "writer";
            }
            $id = sprintf("%03s", $i);
            DB::table('roles')->insert([
                'id' => 'RL'.$id,
                'name_roles' => $role,
                'status_roles' => 'aktif',
                'created_roles' => now(),
            ]);
        }
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'id' => Jotter::makeid(10, 'ACC', 'users' ),
            'role' => 'RL002',
            'nama' => 'Yusup Maulana',
            'telp' => '',
            'email' => 'yusup@gmail.com',
            'username' => 'haiucup',
            'password' => Hash::make('ujicoba1'),
            'created_user' => now(),
            'status' => 'aktif',
            'ava'=>'',
        ]);
    }
}
