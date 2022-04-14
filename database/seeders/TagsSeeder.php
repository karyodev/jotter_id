<?php

namespace Database\Seeders;

use App\Helpers\Jotter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Web Design', 'Job Tips', 'UX Design',  'Tips & Tricks', 'Writting', 'Business', 'Resume'];
        $n = count($data);
        for($i=0; $i<$n; $i++){
            DB::table('tags')->insert([
                'id' => Jotter::makeid(10, 'TGS', 'tags' ),
                'name_tags' => $data[$i],
                'status_tags' => 'aktif',
                'created_tags' => now(),
            ]);
        }
    }
}
